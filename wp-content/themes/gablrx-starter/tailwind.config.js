/* tailwind.config.js */
module.exports = {
  content: [
    './**/*.php',
    './assets/**/*.css',
    './assets/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Source Code Pro', 'sans-serif', 'Courier New', 'monospace'],
      },
      mixBlendMode: {
        difference: 'difference',
      },
    },
  },
  variants: {
    extend: {
      mixBlendMode: ['hover', 'focus'],
    },
  },
  plugins: [],
};