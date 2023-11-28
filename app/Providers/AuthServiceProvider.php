<?php

namespace App\Providers;
use App\Models\Lead;
use App\Policies\Leadpolicy;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
            // Lead::class => Leadpolicy::class,
            // \App\Models\Career::class => \App\Policies\CareerPolicy::class,
            // \App\Models\HireRequest::class => \App\Policies\CareerPolicy::class,
            // \App\Models\Skill::class => \App\Policies\CareerPolicy::class,
            // \App\Models\YourModel::class => \App\Policies\GenericPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
