import { createChatBotMessage } from 'react-chatbot-kit';

import LearningOptions from '../components/LearningOptions/LearningOptions';

const config = {
  botName: 'LearningBot',
  initialMessages: [
    createChatBotMessage("Hi, I'm here to help. What do you want to learn?", {
      widget: 'learningOptions',
    }),
  ],
  customStyles: {
    botMessageBox: {
      backgroundColor: '#376B7E',
    },
    chatButton: {
      backgroundColor: '#376B7E',
    },
  },
  widgets: [
    {
      widgetName: 'learningOptions',
      widgetFunc: (props) => <LearningOptions {...props} />,
    },
  ],
};

export default config;
