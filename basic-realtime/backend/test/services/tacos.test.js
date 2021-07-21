const assert = require('assert');
const app = require('../../src/app');

describe('\'tacos\' service', () => {
  it('registered the service', () => {
    const service = app.service('tacos');

    assert.ok(service, 'Registered the service');
  });
});
