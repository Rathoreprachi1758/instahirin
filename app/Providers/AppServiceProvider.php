<?php

namespace App\Providers;

use App\Events\KycSubmitNotification as KycSubmitEvent;
use App\Events\KycUpdateNotifications;
use App\Listeners\KycSubmitNotification;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Event;
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
        // Blade directive for limiting the description to 50 words
        Blade::directive('limitWords', function ($expression) {
            return "<?php echo Str::words($expression, 50); ?>";
        });
        //
        // if(config('app.env') === 'local') {
        //     \URL::forceScheme('https');
        // }
//        Event::listen(
//            KycSubmitEvent::class,

//            KycSubmitNotification::class,
//        );

        Event::subscribe(KycSubmitNotification::class);
    }

}
