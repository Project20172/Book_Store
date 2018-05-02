<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\category;
use App\Author;

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
        Schema::defaultStringLength(191);
        view()->composer('layout.elements.side_bar',function($view)
        {
            $listCategory=category::all();
            $listAuthor=Author::all();
            $view->with('listCategory',$listCategory);
            $view->with('listAuthor',$listAuthor);
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
