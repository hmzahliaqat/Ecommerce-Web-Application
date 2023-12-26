<?php

namespace App\Listeners;

use App\Events\notificationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class notificationListener
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
     * @param  \App\Events\notificationEvent  $event
     * @return void
     */
    public function handle(notificationEvent $event)
    {
        //
    }
}
