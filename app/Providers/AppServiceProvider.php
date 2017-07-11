<?php

namespace App\Providers;

use App\Events\UserRegistred;
use App\Mail\SendActivationToken;
use App\User;
use Illuminate\Support\Facades\Mail;
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
        //
        User::created( function($user){
            $token = $user->activationToken()->create([
                'token' => str_random(128),
            ]);
            event(new UserRegistred($user));
//            Mail::to($user)->send(new SendActivationToken($token) );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
