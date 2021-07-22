import React from 'react';

import IconButton from '@material-ui/core/IconButton';
import DoneIcon from '@material-ui/icons/Done';

export default function Taco({ key, content, data, inputs, outputs }) {
  return (
    <div>
      <div style={{ textAlign: 'right' }}>
        <IconButton size='small' onClick={() => data.onClick(key)}>
          <DoneIcon />
        </IconButton>
      </div>
      <div role='button' style={{ padding: '15px' }}>
        {content}
      </div>
      <div
        style={{
          marginTop: '10px',
          display: 'flex',
          justifyContent: 'space-between',
        }}
      >
        {inputs.map((port) =>
          React.cloneElement(port, {
            style: { width: '25px', height: '25px', background: '#1B263B' },
          })
        )}
        {outputs.map((port) =>
          React.cloneElement(port, {
            style: { width: '25px', height: '25px', background: '#1B263B' },
          })
        )}
      </div>
    </div>
  );
}
