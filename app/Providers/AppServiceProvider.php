<?php

namespace App\Providers;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\BanerSection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['frontend.master'], function ($view) {
            $view->with(
                'departments', Department::all(),
                'doctors', Doctor::all(),
                'banners', BanerSection::all(),
            );
        });
    }
}
