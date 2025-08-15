const plugin = require("tailwindcss/plugin");
const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.md",
        "./resources/**/*.html",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            black: colors.black,
            white: colors.white,
            red: colors.red,
            purple: colors.purple,
            blue: colors.blue,
            indigo: colors.indigo,
            green: colors.green,
            yellow: colors.yellow,
            pink: colors.pink,
            neutral: {
                light: "#0B0E11",
                DEFAULT: "#0B0E11",
                dark: "#0B0E11",
            },
            primary: {
                light: "#86DBBE",
                DEFAULT: "#58A088",
                dark: "#245C49",
            },
            secondary: {
                light: "#F2B158",
                DEFAULT: "#BF8746",
                dark: "#5C3824",
            },
        },
        fontFamily: {
            display: ["Montserrat", "sans-serif"],
            body: ["Montserrat", "sans-serif"],
        },
        extend: {
            boxShadow: {
                "3xl": "-50px -50px 100px rgba(11, 14, 17, 1)",
            },
            dropShadow: {
                "3xl": "0 60px 60px rgba(11, 14, 17, 0.20)",
            },
            scale: {
                60: ".60",
                129: "1.29",
            },
            width: {
                128: "32rem",
                280: "70rem",
            },
            height: {
                128: "32rem",
                640: "160rem",
            },
            skew: {
                45: "45deg",
                "-45": "-45deg",
            },
            transitionProperty: {
                spacing: "margin, padding",
            },
            zIndex: {
                "-10": "-10",
            },
        },
    },
    variants: {
        extend: {
            fontWeight: ["hover", "focus"],
            grayscale: ["hover", "focus"],
            space: ["hover", "focus", "group-hover"],
            spacing: ["hover", "focus", "group-hover"],
            margin: ["hover", "focus", "group-hover"],
            transitionProperty: ["hover", "focus", "group-hover"],
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
        require("@tailwindcss/aspect-ratio"),
    ],
    important: false,
};
