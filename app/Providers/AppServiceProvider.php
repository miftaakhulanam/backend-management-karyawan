<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('super.admin', function (User $user) {
            return $user->is_admin == 'Super Admin';
        });

        Gate::define('admin', function (User $user) {
            return $user->is_admin == 'Admin';
        });

        Gate::define('staff', function (User $user) {
            return $user->is_admin == 'Staff';
        });
    }
}
