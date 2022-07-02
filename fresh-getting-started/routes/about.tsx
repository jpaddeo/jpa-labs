/** @jsx h */
import { h } from 'preact';
import { tw } from '@twind';

import { Handlers } from '$fresh/server.ts';

export const handler: Handlers = {
  async GET(req, ctx) {
    const resp = await ctx.render();
    resp.headers.set('X-Custom-Header', 'Tu vieja');
    return resp;
  },
};

export default function AboutPage() {
  return (
    <main class={tw`flex flex-col items-center`}>
      <h1>About</h1>
      <p>This is the about page</p>
    </main>
  );
}
