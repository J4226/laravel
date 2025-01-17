<?php

namespace App\Providers;
use Illuminate\Contracts\Auth\Access\Gate;
//use Illuminate\Support\Facades\Gate;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Project' => 'App\Policies\ProjectPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();
   /*     $gate->before(function ($user) {
            return $user->id == 3;
        }); */
     
       $gate->before(function($user){
           if( $user->id == 3 ){

            return true; //this is admin id 
    }

        });

        //
    }
}
