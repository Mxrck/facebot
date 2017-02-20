<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfigurationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data =
            [
                'site_name' => Cache::get('site_name', 'Facebot'),
                'pagination' => Cache::get('pagination', 10),
                'mark_seen' => Cache::get('mark_seen', 0),
                'typing_on' => Cache::get('typing_on', 1),
                'typing_off' => Cache::get('typing_off', 2),
                'message_exception' => Cache::get('message_exception', "Sorry :(, i couldn't recognize that."),
            ];

        return view('configuration.index')->with(compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigurationRequest $request)
    {
        $rows =
            [
                'site_name' => $request->get('site_name', 'Facebot'),
                'pagination' => $request->get('pagination', 10),
                'mark_seen' => $request->get('mark_seen', 0),
                'typing_on' => $request->get('typing_on', 1),
                'typing_off' => $request->get('typing_off', 2),
                'message_exception' => $request->get('message_exception', "Sorry :(, i couldn't recognize that.")
            ];

        foreach($rows as $key => $row)
        {
            Cache::forget($key);
            Cache::forever($key, $row);
        }

        flash('Configuration Updated', 'success');

        return redirect()->back();
    }

}
