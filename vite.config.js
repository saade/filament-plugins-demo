import { defineConfig } from "vite";
import { glob } from "glob";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/filament/theme.css",
                ...glob.sync("packages/**/resources/css/filament/theme.css"),
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
