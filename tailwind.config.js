/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  mode: 'jit',
  content: ["./develop/**.php",
  "./develop/**/**.php",],
  theme: {
    extend: {},
  },
  plugins: [],
}

