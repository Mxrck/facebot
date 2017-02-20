<?php

namespace App\Http\Controllers;

use App\Events\MessageReceived;
use App\Http\Requests\CallbackRequest;
use Illuminate\Support\Facades\Log;

class CallbackController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @param CallbackRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(CallbackRequest $request)
    {
        $sender_id = $request->input('entry.0.messaging.0.sender.id');

        $text = $request->input('entry.0.messaging.0.message.text');

        event(new MessageReceived($sender_id, strtolower($text)));
    }

}
