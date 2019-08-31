<?php

namespace App\Listeners;

use App\events\newPostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


use App\Fcm;

class sendFcmListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  newPostEvent  $event
     * @return void
     */
    public function handle(newPostEvent $event)
    {
        dd("from listener" +$post);
        Fcm::send_notification($event->post);
    }
}
