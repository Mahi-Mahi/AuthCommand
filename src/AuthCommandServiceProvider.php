<?php

namespace MahiMahi\AuthCommand;

use Illuminate\Support\ServiceProvider;

class AuthCommandServiceProvider extends ServiceProvider
{

    protected $commands = [
        Console\Commands\CreateUser::class
    ];


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->commands($this->commands);
    }
}
