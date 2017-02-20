<?php

namespace App\Observers;



use App\Recipient;

class RecipientObserver
{
    /**
     * Listen to the Recipient deleting event.
     *
     * @param  Recipient  $user
     * @return void
     */
    public function deleting(Recipient $recipient)
    {
        $recipient->messages()->delete();
    }
}