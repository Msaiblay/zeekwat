<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Subcategory;
//use Illuminate\Foundation\Auth\User;
//use http\Client\Curl\User;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
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
        Builder::defaultStringLength(191);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        View::share('data',[$categories,$subcategories]);
    }
}
