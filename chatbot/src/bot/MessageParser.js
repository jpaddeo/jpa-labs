import { handleMessage } from '../lib/messages';
class MessageParser {
  constructor(actionProvider) {
    this.actionProvider = actionProvider;
  }

  parse(message) {
    const lowerCaseMessage = message.toLowerCase();
    handleMessage(lowerCaseMessage, this.actionProvider);
  }
}

export default MessageParser;
