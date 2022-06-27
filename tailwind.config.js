// const colors = require("tailwindcss/colors");

module.exports = {
    content: ["src/**/*.{html,js,php}"],
    theme: {
        // Fonts
        fontFamily: {
            roboto: ['Roboto', 'sans-serif'],
            bebas: ['"Bebas Neue"', 'sans-serif'],
            bungee: ['Bungee', 'cursive'],
        },
        extend: {
            colors: {
                modern_dark_blue: {
                    DEFAULT: "#1d3557",
                },
                modern_light_blue: {
                    DEFAULT: "#00bfff",
                },
                modern_grey: {
                    DEFAULT: "#DCDCDC",
                },
                modern_white_smoke: {
                    DEFAULT: "#f5f5f5",
                },
                old_paper: {
                    100: "#fdf6e1",
                    200: "#f0ddb2",
                },
                comic_blue: {
                    DEFAULT: "#3477ab",
                },
                comic_orange: {
                    DEFAULT: "#ff4400",
                },
                comic_yellow: {
                    DEFAULT: "#f7a204",
                },
                comiclopedia_paper: {
                    DEFAULT: "#e6d9cc",
                }
            },
        },
    },
    plugins: [],
};
