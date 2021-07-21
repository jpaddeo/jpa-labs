import io from 'socket.io-client';
// import feathers from '@feathersjs/feathers';
//import socketio from '@feathersjs/socketio-client';

const feathers = require('@feathersjs/feathers');
const socketio = require('@feathersjs/socketio-client');

const host = 'http://localhost:3030';
const socket = io(host);
const client = feathers()
  .configure(socketio(socket))
export default client;
