<?php

namespace Facebot;


use Illuminate\Support\Facades\Cache;

class Bot
{
    /**
     * @param $sender_id
     */
    public static function see($sender_id)
    {
        Sender::sendMessage(['recipient' => ['id' => $sender_id], 'sender_action' => 'mark_seen'], Cache::get('mark_seen', 0));
    }

    /**
     * @param $sender_id
     */
    public static function isTyping($sender_id)
    {
        Sender::sendMessage(['recipient' => ['id' => $sender_id], 'sender_action' => 'typing_on'], Cache::get('typing_on', 1));
    }

    /**
     * @param $sender_id
     */
    public static function endTyping($sender_id)
    {
        Sender::sendMessage(['recipient' => ['id' => $sender_id], 'sender_action' => 'typing_off'], Cache::get('typing_off', 2));
    }

}