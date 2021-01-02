<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class PasswordResetNotification extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
<<<<<<< HEAD
        $urlToResetForm = "http://majesticares.com/reset-password?token=". $this->token;
=======
        $urlToResetForm = "http://app.majesticares.com/reset-password?token=". $this->token;
>>>>>>> 3bb69b1413fec0ad1748de7018cdb3f1eda87709
        return (new MailMessage)
            ->subject('Hey! Reset Password Notification')
            ->line('You requested here you go!')
            ->action('Reset Password', $urlToResetForm)
<<<<<<< HEAD
            ->line('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.users.expire')])
            ->line('If you did not request a password reset, no further action is required. Token: ==>'. $this->token);
=======
            ->line('This password reset link will expire in 1 minute minutes.', ['count' => config('auth.passwords.users.expire')])
            ->line('If you did not request a password reset, no further action is required');
>>>>>>> 3bb69b1413fec0ad1748de7018cdb3f1eda87709
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
