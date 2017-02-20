<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Support\Facades\Cache;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(Cache::get('pagination', 10));

        return view('messages.index')->with(compact('messages'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.show')->with(compact('message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::destroy($id);

        flash('Message Deleted', 'danger');

        return redirect()->route('messages.index');
    }
}
