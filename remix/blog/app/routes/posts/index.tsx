import { Link, useLoaderData } from 'remix';
import { getPosts, Post } from '~/post';

export function loader() {
  return getPosts();
}

export default function Posts() {
  const posts = useLoaderData<Post[]>();

  return (
    <div>
      <h1>Posts</h1>
      {posts.map((post) => (
        <div key={post.id}>
          <Link to={`/posts/${post.slug}`}>
            <h2>{post.title}</h2>
          </Link>
        </div>
      ))}
    </div>
  );
}
