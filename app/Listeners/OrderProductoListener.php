<?php

namespace App\Listeners;

use App\Events\OrderProductoEvents;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderProductoListener
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
     * @param  OrderProductoEvents  $event
     * @return void
     */
    public function handle(OrderProductoEvents $event)
    {
        //
    }
}
