<?php

namespace App\Events;

use App\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Log;

class MessageReceived
{
    use InteractsWithSockets, SerializesModels;

    /**
     * @var Message
     */
    public $sender_id;

    /**
     * @var
     */
    public $text;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($sender_id, $text)
    {
        $this->sender_id = $sender_id;

        $this->text = $text;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
