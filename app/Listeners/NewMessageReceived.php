<?php

namespace App\Listeners;

use App\Events\MessageReceived;
use App\Recipient;
use App\Message;
use Facebot\Sender;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class NewMessageReceived
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageReceived  $event
     * @return void
     */
    public function handle(MessageReceived $event)
    {
        $recipient = Recipient::where('sender_id', $event->sender_id)->first();

        if(empty($recipient))
        {
            $data = array_add(json_decode(Sender::getUser($event->sender_id), true), 'sender_id', $event->sender_id);

            Recipient::create($data);
        }

        Message::create([ 'sender_id' => $event->sender_id, 'text' => $event->text ]);
    }
}
