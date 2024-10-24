/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/**/*.php", // Escanear todos los archivos PHP dentro de la carpeta 'app'
    "./app/src/**/*.{html,js,jsx,ts,tsx}", // Incluir todos los archivos dentro de 'src'
    "./app/vistas/**/*.php", // Si tienes otra carpeta para vistas en PHP
    "./app/vistas/partials/**/*.{html,php}" ,
    "./app/src/**/*.{html,js,jsx,ts,tsx}"  // Archivos dentro de 'src'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}