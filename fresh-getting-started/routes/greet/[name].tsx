/** @jsx h */
import { h } from 'preact';
import { tw } from '@twind';
import { PageProps } from '$fresh/server.ts';

export default function Greet(props: PageProps) {
  return (
    <div class={tw`flex items-center justify-center`}>
      Hello <span class={tw`font-bold text-3xl`}>{props.params.name}</span>
    </div>
  );
}
