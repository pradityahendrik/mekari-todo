<?php

namespace App\Providers;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $models = [
            'Todo'
          ];
    
          foreach($models as $m){
            $this->app->bind(
              "App\\Contracts\\{$m}",
              "App\\Services\\{$m}Service"
            );
          }
    
    }
}
