import { colorizeLetter } from './colors.ts';
import { isGodMode } from './env.ts';
import { writePokemonFile, removePokemonFile } from './file.ts';

const MAX_TRIES = 6;
const POKEMONS_AVAILABLES = 850;

const previousGuesses: Array<string> = [];
const randomId = Math.floor(Math.random() * POKEMONS_AVAILABLES) + 1;

let globalResults = '';

const pokemon = await fetch(`https://pokeapi.co/api/v2/pokemon/${randomId}`)
  .then((res) => res.json())
  .then((response) => response.name.toUpperCase());

if (isGodMode) {
  await writePokemonFile(pokemon);
}

function print(guess: string) {
  console.clear();
  let results = '';
  const letters: Array<string> = [...guess];
  letters.forEach((letter, index) => {
    if (pokemon[index] === letter) {
      results += colorizeLetter('green', letter);
    } else if (pokemon.includes(letter)) {
      results += colorizeLetter('yellow', letter);
    } else {
      results += colorizeLetter('gray', letter);
    }
  });
  globalResults += `${results}\n\n`;
  console.log(globalResults);
}

function askWord() {
  const pokemonName = prompt('The pokemon is...');
  if (pokemonName == null) {
    //  null or undefined
    return { error: 'You must provide a possible pokemon name' };
  } else if (pokemonName.length !== pokemon.length) {
    return {
      error: 'The pokemon name must be ' + pokemon.length + ' characters long',
    };
  } else if (previousGuesses.includes(pokemonName.toUpperCase())) {
    return {
      error: 'You already tried this pokemon name!',
    };
  } else if (!/^[a-zA-Z]+$/.test(pokemonName)) {
    return { error: 'The pokemon name must be alphabetic' };
  }
  return { response: pokemonName.toUpperCase() };
}

function start(tries: number) {
  if (tries >= MAX_TRIES) {
    console.log('You lost! The pokemon was ' + pokemon);
    return;
  }
  let guess = '';
  while (guess === '') {
    const { error, response } = askWord();
    if (error) {
      console.log(error);
      continue;
    }
    if (response) {
      guess = response;
    }
  }
  if (guess === pokemon) {
    print(guess);
    console.log('You won!');
    removePokemonFile();
    return;
  } else {
    print(guess);
    console.log('');
    tries++;
    start(tries);
  }
}

console.log("Let's play a game! Guess the Pokemon Name");
console.log(`You have ${MAX_TRIES} tries`);
console.log(`Hint: It has ${pokemon.length} characters...`);
start(0);
