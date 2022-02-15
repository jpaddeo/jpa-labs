const baseUrl = 'https://api2.hiveos.farm/api/v2';
let accessToken = null;

//requestLoginSecurityToken('XXXXXXX').then((data) => console.log(data));

doLogin('XXXXXXX', 'XXXXXX', 'XXXXXX')
  .then(getFarms)
  .then((farms) => console.log('farms=', farms));

function requestLoginSecurityToken(login) {
  return fetch(`${baseUrl}/auth/login/confirmation`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ login }),
  }).then((r) => {
      console.log(r);
    if (!r.ok) {
      r.json().then((data) => {
        console.error(data.message || 'Response error');
      });
      return Promise.reject(r);
    } else {
      return r.json().then((data) => {
        return data;
      });
    }
  });
}
function doLogin(login, password, twofa_code) {
  console.log(JSON.stringify({ login, password, twofa_code }));
  return fetch(`${baseUrl}/auth/login`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ login, password, twofa_code }),
  }).then((r) => {
    if (!r.ok) {
      r.json().then((data) => {
        console.error(data.message || 'Response error');
      });
      return Promise.reject(r);
    } else {
      return r.json().then((data) => {
        accessToken = data.access_token;
        return data;
      });
    }
  });
}

function getFarms() {
  return fetch(`${baseUrl}/farms`, {
    method: 'GET',
    headers: {
      Authorization: `Bearer ${accessToken}`,
    },
  }).then((r) => {
    if (!r.ok) {
      r.json().then((data) => {
        console.error(data.message || 'Response error');
      });
      return Promise.reject(r);
    } else {
      return r.json();
    }
  });
}
