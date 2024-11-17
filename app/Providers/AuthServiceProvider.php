<?php

namespace App\Providers;

use App\Models\User;

use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'users' => UserPolicy::class,
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        $this->registerPoliciesModules($this->policies);
    }

    protected function registerPoliciesModules($policies)
    {
        foreach ($policies as $name => $policy) {
            Gate::define("{$name}_show", [$policy, 'show']);
            Gate::define("{$name}_create", [$policy, 'create']);
            Gate::define("{$name}_edit", [$policy, 'edit']);
            Gate::define("{$name}_destroy", [$name, 'destroy']);
        }
    }
}
