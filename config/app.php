<?php

return [
    'name' => env('APP_NAME', 'Slim 4 Auth App'),
    'providers' => [
        \App\Providers\EnvironmentVariableServiceProvider::class,
        \App\Providers\BladeServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ErrorMiddlewareServiceProvider::class,
    ]

];