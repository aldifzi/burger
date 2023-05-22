/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {
      screens: {
        'hp': '360px',
        // => @media (min-width: 640px) { ... }
  
        'laptop': '1024px',
        // => @media (min-width: 1024px) { ... }
  
        'desktop': '1280px',
        // => @media (min-width: 1280px) { ... }
      },
  
      fontFamily: {
        anton: ["Anton", "cursive"],
        p: ['Pacifico', "cursive"]
      },
      margin: {
        '42px': '42px',
      }

    },
  },
  plugins: [require("tw-elements/dist/plugin")],
}
