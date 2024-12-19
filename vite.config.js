import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/normalize.css', 'resources/css/app.css', 'resources/js/app.js',
                'resources/css/404.css', 'ressources/css/index.css', 'ressources/css/voyage.css', 'ressources/css/voyages.css',
                'resources/css/test-vite.css', 'resources/js/test-vite.js', "resources/css/login.css"],
            refresh: true,
        }),
    ],
});
