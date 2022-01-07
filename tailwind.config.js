module.exports = {
  content: [],
  theme: {
    extend: {},
    colors: {
      white: "#FFFFFF",
      black: "#000000",
      bluebg: "#000027",
      pink: {
        100: "#FDCFDE",
        200: "#FA9FBF",
        300: "#FA72A0",
        400: "#F64480",
        500: "#F74581"
      },
      gray: {
        100: "#E5E9EF",
        200: "#D4DDE6",
        300: "#9FADB8",
      }
    }
  },
  plugins: [],
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
}
