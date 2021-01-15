<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SolicituCitaEvents implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $SolicitudCita;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($SolicitudCita)
    {
        $this->SolicitudCita = $SolicitudCita;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('Solicitud-cita');
    }
    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'Solicitud-cita';
    }

     /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'IdSolicitud' => $this->SolicitudCita->id,
            'Correo' => $this->SolicitudCita->Correo,
            'Telefono' => $this->SolicitudCita->Telefono,
        ];
    }
}
