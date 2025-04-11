<?php

use App\Http\Middleware\AdminsOnly;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
        ]);

        // $middleware->append(AdminsOnly::class); //Global Middleware

        // $middleware->appendToGroup('X-Group', [ //Group Middleware
        //     X1::class,
        //     X2::class,
        //     X3::class,
        // ]);
    
        $middleware->alias([
            'admins-only' => AdminsOnly::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
