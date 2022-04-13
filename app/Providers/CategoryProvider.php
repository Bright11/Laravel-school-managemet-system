<?php

namespace App\Providers;

use App\Models\Schoolcourses;
use Illuminate\Support\ServiceProvider;

class CategoryProvider extends ServiceProvider
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
        //
        view()->composer('*', function($view){
            $courses=Schoolcourses::all();
            return $view->with('courses',$courses);
        });

    }
}
