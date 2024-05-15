<?php

namespace App\Listeners;

use App\Events\KycSubmitNotification as KycSubmitEvent;
use App\Events\KycUpdateNotifications;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Mail;

class KycSubmitNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

//    /**
//     * Handle the event.
//     */
//    public function handle(KycSubmitEvent $event): void
//    {
//        Mail::to('khanallama@gmail.com')->send(new \App\Mail\KycSubmitNotification());
//        dd($event);
//    }


    public function kycSubmit(KycSubmitEvent $event): void
    {
        Mail::to('khanallama@gmail.com')->send(new \App\Mail\KycSubmitNotification($event->companyKycInformation));
    }

    public function KycStatusUpdate(KycUpdateNotifications $event): void
    {
        dd($event);
    }

    /**
     * Register the listeners for the subscriber.
     */
    public function subscribe(Dispatcher $events): void
    {
        $events->listen(
            KycSubmitEvent::class,
            [KycSubmitNotification::class, 'kycSubmit']
        );

        $events->listen(
            KycUpdateNotifications::class,
            [KycSubmitNotification::class, 'KycStatusUpdate']
        );
    }

}
