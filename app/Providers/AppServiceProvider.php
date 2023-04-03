<?php

namespace App\Providers;

use App\Models\Category;
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
        View::composer('*', function($view) {
            $view->with(['items' => Category::all()]);

        });


        View::composer('*', function($view) {
            $ds=Category::where('is_active', 1)->limit(4)->get();

            $view->with(['items1' =>$ds ]);

        });
        View::composer('*', function($view) {
            $ds1=Category::where('id', '>', 4)->limit(5)->get();

            $view->with(['items2' =>$ds1 ]);

        });
    }
}
