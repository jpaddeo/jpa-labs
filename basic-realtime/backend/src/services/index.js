const tacos = require('./tacos/tacos.service.js');
// eslint-disable-next-line no-unused-vars
module.exports = function (app) {
  app.configure(tacos);
};
