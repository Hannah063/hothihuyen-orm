<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;

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
        //
        Blade::directive('datetime', function($expression){
            $expression = trim($expression, '\'');
            $expression = trim($expression, '"');
            $dateObject = date_create($expression);
            if (!empty($dateObject)) {
                $dateFormat = $dateObject->format('d/m/Y H:i:s');
                return $dateFormat;
            }
            return false;
        });
    }
}
