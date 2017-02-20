<?php

namespace App\Observers;

use App\Expression;
use App\Message;
use Facebot\Bot;
use Facebot\Sender;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class MessageObserver
{

    private $expression;

    private $message;

    /**
     * Listen to the Message created event.
     *
     * @param Message $user
     * @return void
     */
    public function created(Message $message)
    {
        $this->message = $message;

        $expression = Expression::where('text', $message->text)->first();

        $this->expression = $exoression;

        if($expression != null)
        {
            $this->sendAnswers();

            $this->sendResources();
        }
        else{
            $this->sendException();
        }
    }

    // Sending answers
    private function sendAnswers()
    {
        $answers = $this->expression->answers;

        Bot::see($this->message->sender_id);

        foreach ($answers as $answer)
        {

            Bot::isTyping($this->message->sender_id);
            
            Bot::endTyping($this->message->sender_id);

            if($answer->attachment_url == null)
                $data = ['recipient' => ['id' => $this->message->sender_id], 'message' => ['text' => $answer->text]];
            else
                $data = ['recipient' => ['id' => $this->message->sender_id], 'message' => ['attachment' => ['type' => $answer->type, 'payload' => ['url' => $answer->attachment_url] ]]];

            Sender::sendMessage($data);
        }
    }

    // Sending resources
    private function sendResources()
    {
        $resources = $this->expression->resources;

        foreach ($resources as $resource)
        {
            $data = [
                'recipient' => ['id' => $this->message->sender_id],
                'message' => ['attachment' => ['type' => 'template', 'payload' =>
                    ["template_type" => "button", "text" => $resource->title, 'buttons' => [
                        ['type' => "web_url", 'url' => $resource->link, 'title' => $resource->button_text]
                    ]] ]]];

            Sender::sendMessage($data, 2);
        }
    }

    /*
    * If the expression is not found the bot send an answer 
    * to the unexpected messages
    */ 
    private function sendException()
    {
        Bot::see($this->message->sender_id);

        Bot::isTyping($this->message->sender_id);

        $data = ['recipient' => ['id' => $this->message->sender_id], 'message' => ['text' => Cache::get('message_exception', "Sorry :(, i couldn't recognize that.")]];

        Sender::sendMessage($data);
    }
}