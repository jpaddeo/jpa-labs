export const writePokemonFile = (pokemon: string) => {
  return Deno.writeTextFile('./solution.txt', pokemon);
};
export const removePokemonFile = () => {
  return Deno.remove('./solution.txt');
};
