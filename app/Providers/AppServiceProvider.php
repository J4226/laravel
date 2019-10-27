<?php

namespace App\Providers;

use App\Services\Twitter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       \URL::forceScheme('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(
    SocialServiceProvider::class
);
     $this->app->bind(
    \App\Repositories\UserRepository::class,
    \App\Repositories\DbUserRepository::class
     );   
    }
}
