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
        sans: ['Source Code Pro', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        /* heading: ['Arial', 'ui-sans-serif', 'system-ui', 'sans-serif'], */
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