<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\AnswersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $answers = Answer::orderBy('id', 'desc')->paginate(Cache::get('pagination', 10));

        return view('answers.index')->with(compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('answers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnswersRequest $request)
    {
        $data = $request->only([ 'rule_id', 'type', 'text', 'attachment_url' ]);

        Answer::create($data);

        flash('Answer Created', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $answer = Answer::findOrFail($id);

        return view('answers.show')->with(compact('answer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $answer = Answer::findOrFail($id);

        return view('answers.edit')->with(compact('answer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnswersRequest $request, $id)
    {
        $data = $request->only([ 'rule_id', 'type', 'text', 'attachment_url' ]);

        Answer::findOrFail($id)->update($data);

        flash('Answer Updated', 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Answer::destroy($id);

        flash('Answer Deleted', 'danger');

        return redirect()->route('answers.index');
    }
}
