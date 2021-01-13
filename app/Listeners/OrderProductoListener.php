<?php

namespace App\Listeners;

use App\User;
use App\Notifications\OrdenCreada;
use App\Events\OrderProductoEvents;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

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
        User::All()->each(function(User $users) use ($event){
            Notification::send($users, new OrdenCreada($event->OrdenDeCompra));
          });
          
    }
}
