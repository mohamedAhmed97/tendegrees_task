<?php

namespace App\Providers;


use App\Helpers\Strategies\Interfaces\VerifcationStrategy;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(

            VerifcationStrategy::class
        );
    }
        /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}


