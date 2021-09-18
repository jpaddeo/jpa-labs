import React from 'react';

import './DenunciasOptions.css';

const DenunciasOptions = ({
  actionProvider,
  setState,
  scrollIntoView,
  props,
  state,
}) => {
  const options = [
    { text: 'Consultar', handler: actionProvider.handleConsultarDenuncia, id: 1 },
    { text: 'Crear', handler: actionProvider.handleCrearDenuncia, id: 2 },
  ];
  const optionsMarkup = options.map(({ id, handler, text }) => (
    <button className='denuncias-option-button' key={id} onClick={handler}>
      {text}
    </button>
  ));

  return <div className='denuncias-options-container'>{optionsMarkup}</div>;
};

export default DenunciasOptions;
