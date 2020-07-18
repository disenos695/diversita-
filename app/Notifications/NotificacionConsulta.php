<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NotificacionConsulta extends Notification
{
    use Queueable;

    public $Nombre_cliente;
    public $Numero_celular_cliente;
    public $Correo_cliente;
    public $Mensage_cliente;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($Nombre_cliente, $Numero_celular_cliente, $Correo_cliente, $Mensage_cliente)
    {
        //
        $this->Nombre_cliente = $Nombre_cliente;
        $this->Numero_celular_cliente = $Numero_celular_cliente;
        $this->Correo_cliente = $Correo_cliente;
        $this->Mensage_cliente = $Mensage_cliente;
        
        
        
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
        ->line('Notificacion de consulta DIVERSITA')
        // ->action('Notification Action', url('/'))
        ->line('Nombre completo del usuario:')
        ->line( $this->Nombre_cliente)
        
        ->line('Numero de celular del usuario:')
        ->line( $this->Numero_celular_cliente)
        
        ->line('Correo del usuario:')
        ->line( $this->Correo_cliente)
        
        ->line('Menjase de consulta:')
        ->line( $this->Mensage_cliente);
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
            //
        ];
    }
}
