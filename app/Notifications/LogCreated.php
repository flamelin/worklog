<?php

namespace App\Notifications;

use App\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class LogCreated extends Notification
{
    use Queueable;
    protected $log = null;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifable)
    {
        $log = $this->log;

        return (new SlackMessage)
            ->success()
            ->content(sprintf('%s 的工作日誌', $log->user->name))
            ->attachment(function ($attachment) use ($log) {
                $attachment
                    ->title($log->created_at->format('Y-m-d'))
                    ->fields([
                        '今天完成事項' => $log->done,
                        '明日預計事項' => $log->future,
                    ]);
            });
    }
}
