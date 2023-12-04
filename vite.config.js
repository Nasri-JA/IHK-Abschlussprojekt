import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
const path = require("path");

export default defineConfig({
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
            "~fontawesome": path.resolve(__dirname, "node_modules/@fortawesome"),
        },
    },
    server: {
        port: 9000,
        hot: true,
    },
    plugins: [
        laravel({
            input: ["resources/css/app.scss", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
