<?php

namespace App\Providers;

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
        // Ensure the database.sqlite file exists
		// if (!file_exists(database_path('database.sqlite'))) {
		// 	touch(database_path('database.sqlite'));
		// }
    }
}
