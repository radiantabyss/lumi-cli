<?php
namespace Lumi\CLI;

class Config
{
    private static $keys = [
        'bundle-dependencies' => [
            'laravel-auth' => [
                'composer' => [
                    'radiantabyss/lumi-laravel-auth:^3.*',
                ],
            ],
            'vue-admin' => [
                'npm' => [
                    '@ivanv/vue-collapse-transition@0.2.1',
                    'vue-clipboard2@0.3.3',
                    'dropzone@5.5.1',
                    'moment@2.24.0',
                    'moment-timezone@0.5.43',
                    'vue-select@3.18.3',
                    'vue-slider-component@3.2.15',
                    'vue2-datepicker@3.11.1',
                ],
            ],
            'vue-ssr' => [
                'composer' => [
                    'jaybizzle/crawler-detect:^1.2',
                    'laravel/framework:10.*',
                    'radiantabyss/lumi-laravel-core:1.*',
                ],
                'composer_dev' => [
                    'filp/whoops:^2.0',
                ],
            ],
        ],

        'bundle-post-install-commands' => [
            'laravel-auth' => [
                'php artisan vendor:publish lumi-auth:config',
                'php artisan vendor:publish lumi-auth:routes',
                'php artisan vendor:publish lumi-auth:migrations',
            ],
        ],
    ];

    public static function get($key) {
        return self::$keys[$key] ?? false;
    }
}
