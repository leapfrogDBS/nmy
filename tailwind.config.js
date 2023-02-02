/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["../**.php",
"../**/**.php",],
  theme: {
    extend: {
      fontFamily: {
        'moderat': ['"Moderat-Regular"', 'sans-serif'],
        'moderat-bold': ['"Moderat-Bold"', 'sans-serif'],
        'moderat-light': ['"Moderat-Light"', 'sans-serif'],
        'happy': ['"Happy"', 'sans-serif'],
      },
      colors: {
        copper: '#FFAE80',
      },
    },
  },
  plugins: [],
}
