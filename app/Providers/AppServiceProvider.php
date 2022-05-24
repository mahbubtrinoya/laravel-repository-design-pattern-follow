<?php

namespace App\Providers;

use App\Facades\Company;
use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\ContactRepositoryInterface;
use App\Repository\ContactRepository;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    $this->app->bind(ContactRepositoryInterface::class,ContactRepository::class);
        $this->app->bind('Company',function ($app){
            return new Company();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
