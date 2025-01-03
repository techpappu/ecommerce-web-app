<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

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
        View::share('settings', \Facades\App\Models\Setting::first());
        View::share('menuCategory', \Facades\App\Models\Category::orderBy('name')->limit(4)->get());
        Paginator::useBootstrap();
    }
}
