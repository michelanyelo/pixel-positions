import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './index.html',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                grotesk: ['"Hanken Grotesk"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: "#060606",
            }
        },
    },
    plugins: [],
};
