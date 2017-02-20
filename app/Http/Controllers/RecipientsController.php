<?php

namespace App\Http\Controllers;

use App\Recipient;
use Illuminate\Support\Facades\Cache;

class RecipientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $recipients = Recipient::orderBy('id', 'desc')->paginate(Cache::get('pagination', 10));

        return view('recipients.index')->with(compact('recipients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $recipient = Recipient::findOrFail($id);

        return view('recipients.show')->with(compact('recipient'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipient::destroy($id);

        flash('Recipient Deleted', 'danger');

        return redirect()->route('recipients.index');
    }
}
