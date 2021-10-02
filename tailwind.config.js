module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      spacing:{
        "100":"29rem",
        "98":"25rem"
      },
      backgroundImage: {
        'main-bg': "linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)) , url('../img/background.jpg')",
        
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
