<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\App;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('viewWebSocketsDashboard', function ($user = null) {
            if (! App::environment('production')) {
                return true;
            }

            return $user && in_array($user->email, config('app.admin_emails'));
        });

        Gate::define('viewTelescope', function ($user = null) {
            if (! App::environment('production')) {
                return true;
            }

            return $user && $user->isAdmin;
        });
    }
}
