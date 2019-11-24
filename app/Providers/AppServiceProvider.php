<?php

namespace App\Providers;

use App\Services\Twitter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;


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
       Relation::morphMap([
            'series' => 'App\Series',
            'collection' => 'App\Collection'
        
       
       ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     $this->app->bind(
    \App\Repositories\UserRepository::class,
    \App\Repositories\DbUserRepository::class
     );   
    }
}
