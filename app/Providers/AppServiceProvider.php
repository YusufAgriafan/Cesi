<?php

namespace App\Providers;

use App\Models\Depresi;
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
    public function boot()
    {
        View::composer('layout.master2', function ($view) {
            $userId = auth()->id(); 
            $lastDepression = Depresi::where('user_id', $userId)
                ->latest('created_at')
                ->value('depresi');

            $view->with('lastDepression', $lastDepression);
        });
    }
}
