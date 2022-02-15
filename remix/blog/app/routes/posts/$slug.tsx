import { useLoaderData, LoaderFunction } from 'remix';

import { getPost } from '~/post';

export const loader: LoaderFunction = ({ params }) => {
  const { slug = '' } = params;
  const post = getPost(slug);
  return post;
};

export default function Post() {
  const post = useLoaderData();

  return (
    <div>
      <h1>{post.title}</h1>
      <div dangerouslySetInnerHTML={{ __html: post.content }} />
    </div>
  );
}
