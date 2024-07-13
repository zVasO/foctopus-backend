<?php

namespace App\Providers;

use Dedoc\Scramble\Scramble;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
        Scramble::routes(static function (Route $route) {
            return Str::startsWith($route->uri, 'api/');
        });
    }
}
