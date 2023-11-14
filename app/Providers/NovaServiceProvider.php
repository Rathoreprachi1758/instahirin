<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use App\Policies\brandpolicy;
use App\Models\Post2;

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

        Nova::footer(function ($request){
            return "===========Testing=======";
        });
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
            return in_array($user->email, [
                'admin@bizionic.com',
                'admin@gmail.com',
                'admin@admin.com',
            ]);
        });
        Gate::policy(Post2::class, brandpolicy::class);
        // Nova::gate('viewAny', brandpolicy::class.'@viewAny');
        // Nova::gate('view', brandpolicy::class.'@view');
        // protected $policies = [
        //     Brand::class => BrandPolicy::class,
        // ];
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
    return [
        // other cards...
        new \App\Nova\Card\AuthNamecard,
    ];
}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
