<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use App\Policies\brandpolicy;
use App\Models\Post2;
use App\Models\Job;
use App\Models\InstaHirinRequirement;
use \App\Models\User;
use Illuminate\Support\Facades\File;
// use NovaComponents\Permissioncard\Permissioncard;
use novacomponents\Permissioncard\src\Permissioncard;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::withBreadcrumbs();


        Nova::footer(function ($request) {
            // return "===========Testing=======";
        });
        // Nova::group('Human resource', [
        //     \App\Nova\User::class,
        //     \App\Nova\Post::class,
        //     \App\Nova\Career::class,
        //     \App\Nova\HireRequest::class,
        //     \App\Nova\job::class,
        // ]);

        $resourcePath = app_path('Nova');
        $resources = collect(File::files($resourcePath))
            ->map(function ($file) {
                $class = '\\App\\Nova\\' . pathinfo($file)['filename'];
                return class_exists($class) ?  pathinfo($file)['filename'] : null;
            })
            ->filter()
            ->toArray();
        // \Log::info('$resources=====================');
        // \Log::info($resources);
        // $allowedEmails = User::pluck('email')->toArray();
        // \Log::info(' $allowedEmails==========');
        // \Log::info($allowedEmails);
        // Nova::resources($resources);
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            //dd($user->email);
            $allowedEmails = User::pluck('email')->toArray();
            \Log::info($allowedEmails);
            return in_array($user->email, $allowedEmails);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            // ...
            \Outl1ne\MenuBuilder\MenuBuilder::make()

                // Optional customization
                ->title('Menus') // Define a new name for sidebar
                ->icon('adjustments') // Customize menu icon, supports heroicons
                ->hideMenu(false) // Hide MenuBuilder defined MenuSection.
        ];
    }
    //
    protected function cards()
    {
        // return [
        //     new \NovaComponents\Permissioncard\Permissioncard,
        // ];
        return [
            new Permissioncard,
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Nova::serving(function (ServingNova $event) {
        //     //
        // });
    }
    ////


}
