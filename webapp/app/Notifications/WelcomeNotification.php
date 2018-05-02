<?php

/**
* Notifications Class
* TrueFeedback - Notifications
* PHP Laravel Version 5.5
*
* @author Stanly Johnson (stanly.johnson@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;

class WelcomeNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     ** PHP Laravel Version 5.5
     * @author Stanly Johnson (stanly.johnson@servntire.com)
     * @param  mixed  $notifiable
     * @return array
     * (c) Servntire Global (servntire.com)
    */
    
    public function via($notifiable)
    {
        return ['database'];
    }

   

     /**
     * Get the notification's delivery channels.
     ** PHP Laravel Version 5.5
     * @author Stanly Johnson (stanly.johnson@servntire.com)
     * @param  mixed  $notifiable
     * @return array
     * (c) Servntire Global (servntire.com)
    */
    public function toDatabase($notifiable)
    {
        return [
            'repliedTime'=>Carbon::now()
            
        ];
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
