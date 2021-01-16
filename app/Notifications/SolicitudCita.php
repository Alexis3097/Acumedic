<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SolicitudCita extends Notification
{
    use Queueable;
    public $SolicitudCita;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($SolicitudCita)
    {
        $this->SolicitudCita = $SolicitudCita;
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
            'IdSolicitud' => $this->SolicitudCita->id,
            'Correo' => $this->SolicitudCita->Correo,
            'Telefono' => $this->SolicitudCita->Telefono,
        ];
    }
}
