module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {}
  },
  variants: {
    borderWidth: ['responsive', 'first', 'hover', 'focus'],
    padding: ['responsive', 'first', 'hover', 'focus'],
    margin: ['responsive', 'first', 'hover', 'focus'],
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
