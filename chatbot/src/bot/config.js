import { createChatBotMessage } from 'react-chatbot-kit';
import DenunciasOptions from '../components/DenunciasOptions/DenunciasOptions';

import LearningOptions from '../components/LearningOptions/LearningOptions';
import LinkList from '../components/LinkList/LinkList';

const config = {
  botName: 'KIWI',
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
      backgroundColor: '#5ccc9d',
    },
  },
  widgets: [
    {
      widgetName: 'learningOptions',
      widgetFunc: (props) => <LearningOptions {...props} />,
    },
    {
      widgetName: 'denunciasOptions',
      widgetFunc: (props) => <DenunciasOptions {...props} />,
    },
    {
      widgetName: 'javascriptLinks',
      widgetFunc: (props) => <LinkList {...props} />,
      props: {
        options: [
          {
            text: 'Introduction to JS',
            url: 'https://www.freecodecamp.org/learn/javascript-algorithms-and-data-structures/basic-javascript/',
            id: 1,
          },
          {
            text: 'Mozilla JS Guide',
            url: 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide',
            id: 2,
          },
          {
            text: 'Frontend Masters',
            url: 'https://frontendmasters.com',
            id: 3,
          },
        ],
      },
    },
  ],
};

export default config;
