/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"

  ],
  daisyui: {
    themes: [],
  },
  theme: {
    container: {
      padding: "2rem",
      center: true
    },
    extend: {
      colors: {
        CusOrange: "#eb5834",
        Sidebar: "#001D22",
        SidebarActive: "#143136",
        main: "#F0F7F4",
        main2: "#263F43",
        main3: "#b5c7c2",
        main4: "#cadbd6",
        main5: "#000d0f",
        main6: "#003640",
        main7: "#fafaf0"
      },
      boxShadow: {
        shadow1: "0 0 8px rgba(0, 0, 0, 0.1)"
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/line-clamp'),
    require("daisyui")
  ],
}

