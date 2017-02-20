<?php

namespace App\Http\Controllers;

use App\Http\Requests\RulesRequest;
use App\Rule;
use Illuminate\Support\Facades\Cache;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rules = Rule::orderBy('id', 'desc')->paginate(Cache::get('pagination', 10));

        return view('rules.index')->with(compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RulesRequest $request)
    {
        $data = $request->only([ 'title' ]);

        Rule::create($data);

        flash('Rule Created', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $rule = Rule::findOrFail($id);

        return view('rules.show')->with(compact('rule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $rule = Rule::findOrFail($id);

        return view('rules.edit')->with(compact('rule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RulesRequest $request, $id)
    {
        $data = $request->only([ 'title' ]);

        Rule::findOrFail($id)->update($data);

        flash('Rule Updated', 'success');

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
        Rule::destroy($id);

        flash('Rule Deleted', 'danger');

        return redirect()->route('rules.index');
    }
}
