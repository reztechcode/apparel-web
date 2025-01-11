import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require("daisyui"), // Menambahkan DaisyUI sebagai plugin
    ],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#1D4ED8", // Biru Primer
                    secondary: "#3B82F6", // Biru Lebih Terang
                    accent: "#F59E0B", // Kuning
                    neutral: "#F3F4F6", // Latar belakang abu-abu terang
                    "base-100": "#ffffff", // Latar belakang putih
                    info: "#2094f3", // Biru Info
                    success: "#10B981", // Hijau sukses
                    warning: "#F59E0B", // Kuning peringatan
                    error: "#EF4444", // Merah error
                },
            },
        ],
    },
};
