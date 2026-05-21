<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Throwable $e) {
            if (env('VERCEL') || isset($_ENV['VERCEL'])) {
                header('Content-Type: text/plain');
                http_response_code(500);
                echo "VERCEL BOOTSTRAP EXCEPTION:\n" . $e->getMessage() . "\n\nTYPE: " . get_class($e) . "\n\nTRACE:\n" . $e->getTraceAsString();
                exit(0);
            }
        });
    })->create();
