import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/normalize.css', 'resources/css/app.css', 'resources/js/app.js',
                'resources/css/404.css', 'resources/css/index.css', 'resources/css/voyage.css', 'resources/css/voyages.css', 'resources/images/team.jpg',
                'resources/css/test-vite.css', 'resources/js/test-vite.js', "resources/css/login.css", "resources/css/etape.css", "resources/css/form.css", "resources/css/users.css"],
            refresh: true,
        }),
    ],
});
