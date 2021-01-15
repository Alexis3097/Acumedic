<?php

namespace App\Listeners;

use App\User;
use App\Events\SolicituCitaEvents;
use App\Notifications\SolicitudCita;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SolicituCitaListener
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
     * @param  SolicituCitaEvents  $event
     * @return void
     */
    public function handle(SolicituCitaEvents $event)
    {
        User::All()->each(function(User $users) use ($event){
            Notification::send($users, new SolicitudCita($event->SolicitudCita));
          });
    }
}
