<?php

namespace Facebot;

use Illuminate\Support\Facades\Log;

class Sender
{
    /**
     * POST data to Facebook URL
     */
    public static function sendMessage($data, $sleep = 0)
    {
        $curl = curl_init();

        curl_setopt_array($curl,
            [
                CURLOPT_URL => 'https://graph.facebook.com/v2.6/me/messages?access_token='. env('FB_PAGE_TOKEN'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER =>
                    [
                        "cache-control: no-cache",
                        "content-type: application/json",
                    ],
            ]);

        sleep($sleep);

        $response = curl_exec($curl);

        $error = curl_error($curl);

        if($error)
            Log::debug($error);

        curl_close($curl);

        return $response;
    }

    /*
    * GET user data from facebook
    */
    public static function getUser($sender_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl,
            [
                CURLOPT_URL => "https://graph.facebook.com/v2.6/". $sender_id ."?fields=first_name,last_name,profile_pic,locale,timezone,gender&access_token=". env('FB_PAGE_TOKEN'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET"
            ]);

        $response = curl_exec($curl);

        $error = curl_error($curl);

        if($error)
            Log::debug($error);

        curl_close($curl);

        return $response;
    }


}