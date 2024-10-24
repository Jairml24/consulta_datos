/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/index.html",               // Añadir index.html en la raíz de 'app'
    "./app/src/**/*.{html,js,jsx,ts,tsx}"  // Archivos dentro de 'src'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}