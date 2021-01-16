<?php

namespace App\Events;

use Carbon\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

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

    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'Orden-producto';
    }

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
