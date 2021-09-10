class MessageParser {
  constructor(actionProvider) {
    this.actionProvider = actionProvider;
  }

  parse(message) {
    const lowerCaseMessage = message.toLowerCase();

    if (
      lowerCaseMessage.includes('hello') ||
      lowerCaseMessage.includes('hola')
    ) {
      this.actionProvider.greet();
    }

    if (
      lowerCaseMessage.includes('js') ||
      lowerCaseMessage.includes('javascript')
    ) {
      this.actionProvider.handleJavascriptLinks();
    }
  }
}

export default MessageParser;
