import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // Ensure your inputs are correct
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Output directory for the built assets
        manifest: true,         // Make sure to include this
    },
});
