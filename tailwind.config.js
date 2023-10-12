/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  mode: 'jit',
  content: ["./develop/**.php",
  "./develop/**/**.php",],
  theme: {
    extend: {
      fontFamily: {
        sans: ['source-sans-pro', 'Arial', 'Helvetica', 'sans-serif'],
        commuters: ['commuters-sans', 'Georgia', 'serif'],
      },
    },
  },
  plugins: [],
}

