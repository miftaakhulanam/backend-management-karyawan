/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "https://8995-120-188-87-22.ngrok-free.app/",
    ],
    theme: {
        colors: {
            main: "#1061CC",
        },
        extend: {
            fontFamily: {
                inter: ["Inter"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
