<?php

namespace App\Providers;

use App\Brand;
use App\Category;
use Illuminate\Support\ServiceProvider;

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
        $brands = Brand::all();

        $categories = Category::all();

        view()->share(['brands'=> $brands, 'categories'=>$categories]);
    }
}
