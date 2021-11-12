const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

module.exports = {
    darkMode: 'media',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            night: {
                light: '#2121c1',
                DEFAULT: '#090935',
                dark: '#02020d',
            },
            offwhite: {
                light: '#ffffff',
                DEFAULT: '#f5f5f5',
                dark: '#efefef',
            },
            lime: {
                light: '#ddff99',
                DEFAULT: '#aaff00',
                dark: '#80bf00',
            },
            orange: {
                light: '#ffdb99',
                DEFAULT: '#ffa400',
                dark: '#bf7b00',
            },
            yellow: {
                light: '#ffff99',
                DEFAULT: '#ffff00',
                dark: '#bfbf00',
            },
            lilac: {
                light: '#e8cfea',
                DEFAULT: '#c586cb',
                dark: '#946598',
            },
            lightblue: {
                light: '#ebffff',
                DEFAULT: '#ccffff',
                dark: '#99bfbf',
            },
            peach: {
                light: '#fbd6d6',
                DEFAULT: '#f59999',
                dark: '#b87373',
            },
        },

        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
