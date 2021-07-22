import React, { useEffect, useState } from 'react';

import ReactFlow, {
  removeElements,
  addEdge,
  Background,
} from 'react-flow-renderer';

import client from './hooks/useFeathers';
import './App.css';

const onLoad = (reactFlowInstance) => {
  console.log('flow loaded:', reactFlowInstance);
  reactFlowInstance.fitView();
};

function App() {
  const [tacos, setTacos] = useState([]);
  const onTacosRemove = (tacoToRemove) =>
    setTacos((tacosPrev) => removeElements(tacoToRemove, tacosPrev));
  const onTacosConnect = (params) =>
    setTacos((tacosPrev) => addEdge(params, tacosPrev));
  useEffect(() => {
    getTacosRT();
  }, []);

  const getTacosRT = () => {
    client.service('tacos').on('created', (taco) => {
      setTacos((tacosPrev) =>
        tacosPrev.concat({
          id: taco._id,
          data: {
            label: (
              <>
                Tipo {taco.tipo} x <strong>{taco.cantidad}</strong> +{' '}
                {taco.adeherezos.join(',')}
              </>
            ),
          },
          position: {
            x: !tacosPrev.length
              ? 0
              : tacosPrev[tacosPrev.length - 1].position.x + 100,
            y: 10,
          },
        })
      );
    });
  };

  return (
    <div className='app'>
      <ReactFlow
        elements={tacos}
        onElementsRemove={onTacosRemove}
        onConnect={onTacosConnect}
        onLoad={onLoad}
        snapToGrid={true}
        snapGrid={[15, 15]}
      >
        <Background color='#aaa' gap={16} />
      </ReactFlow>
    </div>
  );
}

export default App;
