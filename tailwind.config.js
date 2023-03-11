const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                'white': colors.white,
                'gray': colors.zinc,
                secondary: {
                    100: '#72757e',
                    200: '#5e616a',
                    300: '#4a4d56',
                    400: '#363942',
                    500: '#22252E',
                    600: '#0e111a',
                    700: '#000006',
                    800: '#000000'
                },
                primary: {
                    100: '#ffc381',
                    200: '#ffaf6d',
                    300: '#ff9b59',
                    400: '#ef8745',
                    500: '#DB7331',
                    600: '#c75f1d',
                    700: '#b34b09',
                    800: '#9f3700'
                },
            },
            boxShadow: {
                'ryan': '0 3px 8px rgba(0, 0, 0, 0.4)',
                'glow': '0 0 10px 2px rgba(255, 255, 255, 0.5)',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
