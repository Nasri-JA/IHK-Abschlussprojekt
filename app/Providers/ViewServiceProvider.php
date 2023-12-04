<?php

namespace App\Providers;

use App\View\Composers\ModuleComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', ModuleComposer::class);

        View::composer('*', function ($view) {
            $view->with('userTz', auth()->user()->timezone ?? 'UTC');
        });
    }
}
