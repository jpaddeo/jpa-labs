import React, { useEffect, useState } from 'react';

import client from './hooks/useFeathers';

import './App.css';

function App() {
  const [tacos, setTacos] = useState([]);

  useEffect(() => {
    console.log('useEffect');
    getTacosRT();
  }, []);

  const getTacosRT = () => {
    client.service('tacos').on('created', (taco) => {
      setTacos((prev) => prev.concat(taco));
    });
  };

  return (
    <div className='app'>
      <h1>TACO's Factory</h1>
      {tacos.map((taco, i) => (
        <p key={i}>{JSON.stringify(taco)}</p>
      ))}
    </div>
  );
}

export default App;
