import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#012169",
                secondary: "#F000B8",
                accent: "#37CDBE",
                neutral: "#3D4451",
                "base-100": "#FFFFFF",
                info: "#3ABFF8",
                success: "#36D399",
                warning: "#FBBD23",
                error: "#F87272",
                green: "#19743b",
                red: "#F87272",
                accent: "#806043",
                neutral: "#3D4451",
                "base-100": "#FFFFFF",
            },
            // font size
            fontSize: {
                sm: "0.875rem",
                base: "1rem",
                lg: "1.125rem", // 18px
                xl: "1.25rem",
                "2xl": "1.5rem",
                "3xl": "1.875rem",
                "4xl": "2.25rem",
                "5xl": "3rem",
                "6xl": "4rem",
            },
        },
    },

    plugins: [require("flowbite/plugin")],
};
