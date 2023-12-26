<?php

namespace App\Listeners;

use App\Events\commentEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class commentListener
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
     * @param  \App\Events\commentEvent  $event
     * @return void
     */
    public function handle(commentEvent $event)
    {
        //
    }
}
