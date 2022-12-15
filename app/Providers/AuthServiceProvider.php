<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdminDisdik', function($user) {
            return $user->role == 'admin_disdik';
        });

        Gate::define('isAdminSMP', function($user) {
            return $user->role == 'admin_smp';
        });

        Gate::define('isAdminSD', function($user) {
            return $user->role == 'admin_sd';
        });
    }
}
