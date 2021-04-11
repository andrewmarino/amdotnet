module.exports = {
  corePlugins: {
    container: false,
  },
  theme: {
    colors: {}
  },
  variants: {},
  plugins: [],
  purge: {
    content: [
      './assets/src/scripts/**/*.js',
      './site/snippets/**/*.blade.php',
      './site/templates/**/*.blade.php',
    ],
    options: {
      safelist: [/^tobi/],
    },
  },
}
