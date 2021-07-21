// src/feathers.js
import io from 'socket.io-client';
import feathers from '@feathersjs/client';
// Socket.io is exposed as the `io` global.
const socket = io('http://localhost:3030');
// @feathersjs/client is exposed as the `feathers` global.
const client = feathers()
  .configure(feathers.socketio(socket))
  .configure(feathers.hooks());
export default client;
