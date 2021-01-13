<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderProductoEvents implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $OrdenDeCompra;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($OrdenDeCompra)
    {
        $this->OrdenDeCompra = $OrdenDeCompra;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('Orden-producto');
    }

    // /**
    //  * The event's broadcast name.
    //  *
    //  * @return string
    //  */
    // public function broadcastAs()
    // {
    //     return 'Orden-producto';
    // }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'IdOrden' => $this->OrdenDeCompra->id,
            'Cantidad' => $this->OrdenDeCompra->Cantidad,
            'Telefono' => $this->OrdenDeCompra->Telefono,
        ];
    }
}
