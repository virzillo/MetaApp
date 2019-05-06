<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class UserRegisteredSuccessfully extends Notification
{
    use Queueable;
    /**
     * @var User
     */
    protected $user;
    /**
     * Create a new notification instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
        /** @var User $user */
        $user = $this->user;
        return (new MailMessage)
            ->from('info@pladgepeople.it')
            ->subject('Creazione Account MetaApp')
            ->greeting(sprintf('Ciao %s', $user->name))
            ->line('Sei stato registrato corretamente nei nostri sitemi. Prego attiva il tuo account usando il link sottostante.')
            ->action('Attiva', route('activate.user', $user->activation_code))
            ->line('Grazie per aver scelto di usare la nostra applicazione!');
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
