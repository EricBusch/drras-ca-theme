const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        extend: {
            maxWidth: {
                '8xl': '88rem',
                '9xl': '96rem'
            }
        }
    },
    plugins: [
        tailpress.tailwind,
        require('@tailwindcss/typography'),
    ]
};
