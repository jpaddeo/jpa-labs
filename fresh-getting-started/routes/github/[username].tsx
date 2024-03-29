/** @jsx h */
import { h } from 'preact';
import { tw } from '@twind';
import { Handlers, PageProps } from '$fresh/server.ts';

interface User {
  login: string;
  name: string;
  avatar_url: string;
}

export const handler: Handlers<User | null> = {
  async GET(_, ctx) {
    const { username } = ctx.params;
    const resp = await fetch(`https://api.github.com/users/${username}`);
    if (resp.status === 404) {
      return ctx.render(null);
    }
    const user: User = await resp.json();
    return ctx.render(user);
  },
};

export default function GitHubUserPage({ data }: PageProps<User | null>) {
  if (!data) return <h1>User not found</h1>;

  return (
    <div class={tw`bg-gray-900 h-screen text-white`}>
      <img
        src={data.avatar_url}
        alt={data.name}
        class={tw`h-10 w-10 rounded-full border-2 border-white`}
      />
      <h1>{data.name}</h1>
      <p>{data.login}</p>
    </div>
  );
}
