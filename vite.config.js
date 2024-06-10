import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/main.css",
                "resources/css/style.css",
                "resources/js/bc_js/work.js",
                "resources/js/bc_js/about.js",
                "resources/js/bc_js/catalog.js",
            ],
            refresh: true,
        }),
    ],
});
