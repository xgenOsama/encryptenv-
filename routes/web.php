<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $keys = [
        'APP_NAME',
        'APP_ENV',
        'APP_KEY',
        'APP_DEBUG',
        'APP_URL',
        'LOG_CHANNEL',
        'LOG_DEPRECATIONS_CHANNEL',
        'LOG_LEVEL',
        'DB_CONNECTION',
        'DB_HOST',
        'DB_PORT',
        'DB_DATABASE',
        'DB_USERNAME',
        'DB_PASSWORD',
        'BROADCAST_DRIVER',
        'CACHE_DRIVER',
        'FILESYSTEM_DISK',
        'QUEUE_CONNECTION',
        'SESSION_DRIVER',
        'SESSION_LIFETIME',
        'MEMCACHED_HOST',
        'REDIS_HOST',
        'REDIS_PASSWORD',
        'REDIS_PORT',
        'MAIL_MAILER',
        'MAIL_HOST',
        'MAIL_PORT',
        'MAIL_USERNAME',
        'MAIL_PASSWORD',
        'MAIL_ENCRYPTION',
        'MAIL_FROM_ADDRESS',
        'MAIL_FROM_NAME',
        'AWS_ACCESS_KEY_ID',
        'AWS_SECRET_ACCESS_KEY',
        'AWS_DEFAULT_REGION',
        'AWS_BUCKET',
        'AWS_USE_PATH_STYLE_ENDPOINT',
        'PUSHER_APP_ID',
        'PUSHER_APP_KEY',
        'PUSHER_APP_SECRET',
        'PUSHER_HOST',
        'PUSHER_PORT',
        'PUSHER_SCHEME',
        'PUSHER_APP_CLUSTER',
        'VITE_APP_NAME',
        'VITE_PUSHER_APP_KEY',
        'VITE_PUSHER_HOST',
        'VITE_PUSHER_PORT',
        'VITE_PUSHER_SCHEME',
        'VITE_PUSHER_APP_CLUSTER',
    ];
    $envVars = [];
    foreach ($keys as $key) {
        $envVars[$key] = secureEnv($key);
    }
    return response()->json($envVars);
});
