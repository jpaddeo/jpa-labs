import { Router } from 'https://deno.land/x/oak/mod.ts';
import { addTodo } from './controllers/todos.ts';

const router = new Router();

// TODO: routes definition
router.post('/api/todos', addTodo);

export default router;
