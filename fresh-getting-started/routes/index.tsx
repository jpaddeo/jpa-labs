/** @jsx h */
import { h } from 'preact';
import { tw } from '@twind';
import Counter from '../islands/Counter.tsx';
import Countdown from '../islands/Countdown.tsx';

export default function Home() {
  const date = new Date();
  date.setHours(date.getHours() + 1);
  return (
    <div class={tw`p-4 mx-auto max-w-screen-md`}>
      <img
        src='/logo.svg'
        height='100px'
        alt='the fresh logo: a sliced lemon dripping with juice'
      />
      <p class={tw`my-6`}>
        Welcome to `fresh`. Try update this message in the ./routes/index.tsx
        file, and refresh.
      </p>
      <Counter start={3} />
      <span>
        The big event is happening <Countdown target={date.toISOString()} />
      </span>
    </div>
  );
}
