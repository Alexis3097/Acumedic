<?php

namespace App\Notifications;

use Carbon\Carbon;
use App\Models\OrdenDeCompra;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrdenCreada extends Notification
{
    use Queueable;
    public $OrdenDeCompra;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(OrdenDeCompra $OrdenDeCompra)
    {
        $this->OrdenDeCompra = $OrdenDeCompra;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'IdOrden' => $this->OrdenDeCompra->id,
            'Cantidad' => $this->OrdenDeCompra->Cantidad,
            'Telefono' => $this->OrdenDeCompra->Telefono,
        ];
    }
}
