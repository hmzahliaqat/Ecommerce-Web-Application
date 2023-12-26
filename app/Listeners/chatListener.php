<?php

namespace App\Listeners;

use App\Events\chatEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class chatListener
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
     * @param  \App\Events\chatEvent  $event
     * @return void
     */
    public function handle(chatEvent $event)
    {
        //
    }
}
