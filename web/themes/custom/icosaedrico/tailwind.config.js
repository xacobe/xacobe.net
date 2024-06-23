/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.twig",
    "./**/*.css",
    "./**/*.{js,jsx}",
    // Ajusta las rutas según sea necesario
  ],
  theme: {
    container: {
      center: true,
    },
    colors: {
      'red': {
        '50': '#fff1f1',
        '100': '#ffdfdf',
        '200': '#ffc4c4',
        '300': '#ff9c9c',
        '400': '#ff6363',
        '500': '#ff3232',
        '600': '#f01212',
        '700': '#d90c0c',
        '800': '#a70d0d',
        '900': '#8a1212',
        '950': '#4b0404',
      },
      'orange': {
        '50': '#fffbea',
        '100': '#fff2c5',
        '200': '#ffe685',
        '300': '#ffd246',
        '400': '#ffbd1b',
        '500': '#ff9900',
        '600': '#e27200',
        '700': '#bb4d02',
        '800': '#983b08',
        '900': '#7c310b',
        '950': '#481700',
      },
      'green': {
        '50': '#f0fdf2',
        '100': '#dcfce3',
        '200': '#bbf7c9',
        '300': '#86efa0',
        '400': '#4ade6f',
        '500': '#26da53',
        '600': '#16a339',
        '700': '#158030',
        '800': '#16652b',
        '900': '#145326',
        '950': '#052e11',
      },
      'blue': {
        '50': '#eefafd',
        '100': '#d3f2fa',
        '200': '#ade5f4',
        '300': '#74d1ec',
        '400': '#35b3db',
        '500': '#1996c1',
        '600': '#1878a2',
        '700': '#1a6184',
        '800': '#1e506c',
        '900': '#1d445c',
        '950': '#0e2c3e',
      },
      'purple': {
        '50': '#fff4ff',
        '100': '#fee7ff',
        '200': '#fdceff',
        '300': '#ffa8ff',
        '400': '#fe74fd',
        '500': '#f540f2',
        '600': '#d920d2',
        '700': '#b417ab',
        '800': '#93158a',
        '900': '#78176f',
        '950': '#51014a',
      },
      'black': {
        '50': '#f4f3f2',
        '100': '#e2e1df',
        '200': '#c7c4c1',
        '300': '#a7a29d',
        '400': '#8e8781',
        '500': '#78716c',
        '600': '#6d6561',
        '700': '#585250',
        '800': '#4d4846',
        '900': '#443f3f',
        '950': '#262322',
      },
    }
  },
  plugins: [
    require("daisyui"),
    require('@tailwindcss/typography'),
  ],

  // daisyUI config (optional - here are the default values)
  daisyui: {
    themes: ["light", "dark", "cupcake"], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
    darkTheme: "cupcake", // name of one of the included themes for dark mode
    base: true, // applies background color and foreground color for root element by default
    styled: true, // include daisyUI colors and design decisions for all components
    utils: true, // adds responsive and modifier utility classes
    prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
    logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
    themeRoot: ":root", // The element that receives theme color CSS variables
  },
}
