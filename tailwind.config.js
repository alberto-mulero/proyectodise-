/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  darkMode: 'media',
  content: [
   
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    ,
    
    
  ],
  theme: {
    extend: {
      colors:{
        pri: {
          '50':  '#f3f8f9',
          '100': '#daf1fa',
          '200': '#afe0f5',
          '300': '#7cc2e7',
          '400': '#479ed3',
          '500': '#357dc0',
          '600': '#2d62a9',
          '700': '#254a87',
          '800': '#1b3260',
          '900': '#101f3f',
        },
        secu: {
          '50':  '#f6f9fb',
          '100': '#e3f0fd',
          '200': '#c5d9fa',
          '300': '#9db5f3',
          '400': '#798eea',
          '500': '#6269e3',
          '600': '#514dd6',
          '700': '#3e39b6',
          '800': '#2b2788',
          '900': '#181956',
        },
        terc: {
          '50':  '#f9fafb',
          '100': '#edeffb',
          '200': '#dad4f8',
          '300': '#baaeef',
          '400': '#a485e3',
          '500': '#8c60da',
          '600': '#7344c9',
          '700': '#5733a6',
          '800': '#3c2377',
          '900': '#221748',
        }
      },
      // fontFamily:{
      //   princi : ["IM FELL Great Primer SC", "sans"],
      //   segun : ["IM FELL Great Primer", "sans"],
      //   terc : ["Castoro", "sans"]
      // }
    },
  },
  plugins: [],
}
