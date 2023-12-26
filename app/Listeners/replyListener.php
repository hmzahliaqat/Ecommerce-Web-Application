<?php

namespace App\Listeners;

use App\Events\replyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class replyListener
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
     * @param  \App\Events\replyEvent  $event
     * @return void
     */
    public function handle(replyEvent $event)
    {
        //
    }
}
