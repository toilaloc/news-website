<?php

namespace App\Providers;

use App\Models\Categories;
use App\Models\Notifications;
use App\Models\Posts;
use Illuminate\Console\Scheduling\Event;
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
            $bannerPost = Posts::orderBy('view', 'DESC')->take(3)->get();
            $notifications = Notifications::orderBy('id', 'DESC')->get();
            $notificationsPosting = Notifications::where('type','newpost')->orderBy('id', 'DESC')->get();
            $categoriesMenu = Categories::all()->whereNull('category_id');
            $view->with([
                'categoriesMenu' => $categoriesMenu, 
                'notifications' => $notifications, 
                'notificationsPosting' => $notificationsPosting,
                'bannerPost' => $bannerPost,
                ]);
        });
       
    }
}
