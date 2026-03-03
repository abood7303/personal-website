/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                dark: {
                    900: 'rgb(var(--dark-900) / <alpha-value>)',
                    800: 'rgb(var(--dark-800) / <alpha-value>)',
                    700: 'rgb(var(--dark-700) / <alpha-value>)',
                    border: 'var(--dark-border)'
                },
                text: {
                    primary: 'rgb(var(--text-primary) / <alpha-value>)',
                    secondary: 'rgb(var(--text-secondary) / <alpha-value>)',
                },
                accent: 'rgb(var(--accent) / <alpha-value>)'
            },
            fontFamily: {
                sans: ['Inter', 'IBM Plex Sans Arabic', 'sans-serif'],
                serif: ['Playfair Display', 'Cairo', 'serif'],
            }
        },
    },
    plugins: [],
}
