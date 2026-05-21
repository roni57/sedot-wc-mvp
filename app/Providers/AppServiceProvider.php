<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (env('VERCEL') || isset($_ENV['VERCEL'])) {
            // Vercel serverless environment is read-only, so views must compile to /tmp
            config(['view.compiled' => '/tmp/storage/framework/views']);
        }
    }
}
