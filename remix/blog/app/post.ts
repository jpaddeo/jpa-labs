import path from 'path';
import fs from 'fs/promises';
import parseFrontMatter from 'front-matter';
import invariant from 'tiny-invariant';
import { marked } from 'marked';

export type Post = {
  id: number;
  slug: string;
  title: string;
};

export type NewPost = {
  title: string;
  slug: string;
  content: string;
};

export type PostMarkdownAttributes = {
  title: string;
};

export type PostMarkdown = {
  attributes: PostMarkdownAttributes;
  body: string;
};

const postsPath = path.join(__dirname, '..', 'posts');

function isValidPostAttributes(
  attributes: any
): attributes is PostMarkdownAttributes {
  return attributes?.title;
}

export async function getPosts() {
  const dir = await fs.readdir(postsPath);
  return Promise.all(
    dir.map(async (filename) => {
      const file = await fs.readFile(path.join(postsPath, filename), 'utf8');
      const { attributes }: { attributes: PostMarkdownAttributes } =
        parseFrontMatter(file.toString());
      invariant(
        isValidPostAttributes(attributes),
        `${filename} has bad meta data!`
      );
      return {
        slug: filename.replace(/\.md$/, ''),
        title: attributes.title,
      };
    })
  );
}

export async function getPost(slug: string) {
  const file = await fs.readFile(path.join(postsPath, `${slug}.md`), 'utf8');
  const { attributes, body }: PostMarkdown = parseFrontMatter(file.toString());
  invariant(isValidPostAttributes(attributes), `${slug}.md has bad meta data!`);
  const content = marked(body);
  return {
    slug,
    title: attributes.title,
    content,
  };
}

export async function createPost(post: NewPost) {
  const md = `---\ntitle: ${post.title}\n---\n${post.content}`;
  await fs.writeFile(path.join(postsPath, `${post.slug}.md`), md);
  return getPost(post.slug);
}
