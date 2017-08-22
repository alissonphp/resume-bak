<?php

namespace Alisson\ResumeBank;

use Illuminate\Support\ServiceProvider;

class ResumeBankServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views','resume-bank');
        $this->publishes([
           __DIR__.'/views' => base_path('resources/views/alissonphp/resume-bank'),
        ]);
        $this->publishes([
           __DIR__.'/migrations' => database_path('migrations/'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Alisson\ResumeBank\Controllers\ResumeBankController');
    }
}
