export const handleMessage = (msg, actionProvider) => {
  if (msg.includes('hello') || msg.includes('hola')) {
    actionProvider.greet();
  }
  if (msg.includes('js') || msg.includes('javascript')) {
    actionProvider.handleJavascriptLinks();
  }
};
