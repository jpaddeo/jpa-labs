import Chatbot from 'react-chatbot-kit';

import config from './bot/config';
import ActionProvider from './bot/ActionProvider';
import MessageParser from './bot/MessageParser';
import './App.css';

function App() {
  return (
    <div className='App'>
      <header className='App-header'>
        <Chatbot
          config={config}
          messageParser={MessageParser}
          actionProvider={ActionProvider}
        />
      </header>
    </div>
  );
}

export default App;
