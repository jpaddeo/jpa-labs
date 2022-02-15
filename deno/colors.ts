import {
  bold,
  white,
  bgGreen,
  bgYellow,
  bgBrightBlack,
} from 'https://deno.land/std@0.125.0/fmt/colors.ts';

const COLOR_METHODS = {
  green: bgGreen,
  yellow: bgYellow,
  gray: bgBrightBlack,
};

export function colorizeLetter(
  color: 'green' | 'yellow' | 'gray',
  letter: string
) {
  const bg = COLOR_METHODS[color];
  const colorizedLetter = bg(bold(white(` ${letter} `)));
  return ` ${colorizedLetter} `;
}
