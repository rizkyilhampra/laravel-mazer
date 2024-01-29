import { defineConfig, normalizePath } from 'vite';
import laravel from 'laravel-vite-plugin';
import path, { resolve } from 'path'

const __dirname = path.dirname(__filename);

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/layouts/app.js',
                'resources/js/layouts/auth.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': normalizePath(resolve(__dirname, 'resources')),
            '~bootstrap': resolve(__dirname, 'node_modules/bootstrap'),
            '~bootstrap-icons': resolve(__dirname, 'node_modules/bootstrap-icons'),
            '~perfect-scrollbar': resolve(__dirname, 'node_modules/perfect-scrollbar'),
            '~@fontsource': resolve(__dirname, 'node_modules/@fontsource'),
        }
    },
});
