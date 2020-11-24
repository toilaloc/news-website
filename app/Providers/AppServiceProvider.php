<?php

namespace App\Providers;

use App\Models\Categories;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {      
        view()->composer('*', function($view)
        {
            $categoriesMenu = Categories::all()->whereNull('category_id');
            $view->with('categoriesMenu', $categoriesMenu);
        });
       
    }
}
