<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class DomainNameProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $domain = 'https://management.synexdigital.com';
        View::share('domainName', $domain);

        // Optionally, make it globally accessible
        app()->singleton('domainName', function () use ($domain) {
            return $domain;
        });
    }
}
