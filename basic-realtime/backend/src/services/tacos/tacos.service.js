// Initializes the `tacos` service on path `/tacos`
const { Tacos } = require('./tacos.class');
const createModel = require('../../models/tacos.model');
const hooks = require('./tacos.hooks');

module.exports = function (app) {
  const options = {
    Model: createModel(app),
    paginate: app.get('paginate')
  };

  // Initialize our service with any options it requires
  app.use('/tacos', new Tacos(options, app));

  // Get our initialized service so that we can register hooks
  const service = app.service('tacos');

  service.hooks(hooks);
};
