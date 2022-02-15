import { Outlet, Link, LoaderFunction, useLoaderData } from 'remix';
import { getPosts, Post } from '~/post';

import adminStyles from '~/styles/admin.css';

export let links = () => {
  return [{ rel: 'stylesheet', href: adminStyles }];
};

export const loader: LoaderFunction = async ({ request }) => {
  return getPosts();
};

export default function Admin() {
  const posts: Post[] = useLoaderData();

  return (
    <div className='admin'>
      <nav>
        <h1>Admin</h1>
        <ul>
          {posts.map((post) => (
            <li key={post.slug}>
              <Link to={post.slug}>{post.title}</Link>
            </li>
          ))}
        </ul>
      </nav>
      <main>
        <Outlet />
      </main>
    </div>
  );
}
