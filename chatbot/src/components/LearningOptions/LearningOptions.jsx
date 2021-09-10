import React from 'react';

import './LearningOptions.css';

const LearningOptions = ({
  actionProvider,
  setState,
  scrollIntoView,
  props,
  state,
}) => {
  const options = [
    { text: 'JS', handler: actionProvider.handleJavascriptLinks, id: 1 },
    { text: 'APIs', handler: () => {}, id: 2 },
    { text: 'Security', handler: () => {}, id: 3 },
  ];
  const optionsMarkup = options.map(({ id, handler, text }) => (
    <button className='learning-option-button' key={id} onClick={handler}>
      {text}
    </button>
  ));

  return <div className='learning-options-container'>{optionsMarkup}</div>;
};

export default LearningOptions;
