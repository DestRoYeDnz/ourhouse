const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: 'jit',
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#ffffff',
                'ourhouse': {
                  100: '#BBDDF2',
                  200: '#99CBEB',
                  300: '#77BAE4',
                  400: '#55A8DE',
                  500: '#3397D7',
                  600: '#2278AF',
                  700: '#195881',
                  800: '#103852',
                  900: '#071823',
                },
              },

        },
    },
    variants: {
        opacity: ({ after }) => after(["disabled"]),
    },

    plugins: [require("@tailwindcss/forms")],
};


