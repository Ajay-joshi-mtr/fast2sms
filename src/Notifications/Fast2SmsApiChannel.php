<?php

namespace Ajayjoshi\Fast2sms\Notifications;

use Ajayjoshi\Fast2sms\Notifications\Fast2SmsApiMessage;
use Ajayjoshi\Fast2sms\Fast2SmsApi;
use Illuminate\Notifications\Notification;

class Fast2SmsApiChannel
{
    /** @var Client */
    protected $client;

    /**
     * @param SmsApi $client
     */
    public function __construct(SmsApi $client) {
        $this->client = $client;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed $notifiable
     * @param  \Illuminate\Notifications\Notification $notification
     * @return void
     * @throws \Gr8Shivam\SmsApi\Exception\InvalidMethodException
     */
    public function send($notifiable, Notification $notification)
    {
        if (! $mobile = $notifiable->routeNotificationFor('sms_api')) {
            return;
        }

        $message = $notification->toSmsApi($notifiable);

        if (is_string($message)) {
            $message = new Fast2SmsApi($message);
        }

        $this->client->sendMessage($mobile,$message->content,$message->params,$message->headers);
    }
}