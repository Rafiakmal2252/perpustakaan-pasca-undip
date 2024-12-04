import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                sans: ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                isi: '#47663B',
                background: '#D9DCD6',
                judul: '#5F7470',
                link: '#2EA3F2',
                footer: '#0A0F29',
            },
            keyframes: {
                slideInFromLeft: {
                  '0%': { transform: 'translateX(-100%)', opacity: '0' },
                  '100%': { transform: 'translateX(0)', opacity: '1' },
                },
              },
              animation: {
                slideInFromLeft: 'slideInFromLeft 1s ease-out',
              },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
