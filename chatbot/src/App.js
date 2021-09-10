import React, { useState } from 'react';
import { FaRobot } from 'react-icons/fa';

import Chatbot from 'react-chatbot-kit';

import config from './bot/config';
import ActionProvider from './bot/ActionProvider';
import MessageParser from './bot/MessageParser';

import './App.css';

function App() {
  const [showBot, toggleBot] = useState(false);

  return (
    <div className='App'>
      <header className='App-header'>
        {showBot && (
          <Chatbot
            config={config}
            messageParser={MessageParser}
            actionProvider={ActionProvider}
          />
        )}
      </header>
      <footer className='App-footer'>
        <button
          onClick={() => toggleBot((prev) => !prev)}
          className='App-botbutton'
        >
          <FaRobot />
        </button>
      </footer>
    </div>
  );
}

export default App;
