// const colors = require("tailwindcss/colors");

module.exports = {
    content: ["src/**/*.{html,js,php}"],
    theme: {
        extend: {
            colors: {
                old_paper: {
                    100: "#fdf6e1",
                    200: "#f0ddb2",
                },
                comic_blue: {
                    DEFAULT: "#3477ab",
                },
            },
        },
    },
    plugins: [],
};
