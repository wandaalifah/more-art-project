/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                lora: "Lora",
                dmSerif: "DM Serif Display",
            },
            colors: {
                blue: {
                    600: "#0D21A1",
                    900: "#011638",
                },
                white: {
                    900: "#EFF0F2",
                },
                black: {
                    900: "#141413",
                },
                yellow: {
                    600: "#EEC643",
                },
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
    ],
};
