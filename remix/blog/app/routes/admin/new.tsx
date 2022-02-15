import {
  Form,
  redirect,
  ActionFunction,
  useActionData,
  useTransition,
} from 'remix';
import { createPost } from '~/post';

import invariant from 'tiny-invariant';

export const action: ActionFunction = async ({ request }) => {
  const formData = await request.formData();
  const title = formData.get('title');
  const slug = formData.get('slug');
  const content = formData.get('content');

  let errors: any = {};
  if (!title) errors.title = true;
  if (!slug) errors.slug = true;
  if (!content) errors.content = true;

  if (Object.keys(errors).length) {
    return errors;
  }

  invariant(typeof title === 'string');
  invariant(typeof slug === 'string');
  invariant(typeof content === 'string');

  await createPost({ title, slug, content });
  return redirect('/admin');
};

export default function NewPost() {
  const errors = useActionData();
  const transition = useTransition();

  return (
    <Form method='post'>
      <label htmlFor='title'>
        <h4>Title</h4>
        {errors?.title && <em>Title is required</em>}
        <input type='text' name='title' />
      </label>
      <label htmlFor='slug'>
        <h4>Slug</h4>
        {errors?.slug && <em>Slug is required</em>}
        <input type='text' name='slug' />
      </label>
      <label htmlFor='content'>
        <h4>Content</h4>
        {errors?.content && <em>Content is required</em>}
        <textarea name='content' rows={20} style={{ width: '100%' }}></textarea>
      </label>
      <div>
        <button type='submit' disabled={!!transition.submission}>
          {transition.submission ? 'Creating...' : 'Create Post'}
        </button>
      </div>
    </Form>
  );
}
