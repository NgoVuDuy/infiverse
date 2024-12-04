<?php

use App\Http\Middleware\CheckCourseEnrollmentMiddleware;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\PreventRootMiddleware;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //

        $middleware->alias([

            'role' => RoleMiddleware::class,
            'login' => LoginMiddleware::class,
            'prevent_root' => PreventRootMiddleware::class,
            'checkcourseenrollment' => CheckCourseEnrollmentMiddleware::class

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
