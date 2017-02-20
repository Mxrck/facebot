<?php

namespace App\Http\Controllers;

use App\Expression;
use App\Http\Requests\ExpressionsRequest;
use Illuminate\Support\Facades\Cache;

class ExpressionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $expressions = Expression::orderBy('id', 'desc')->paginate(Cache::get('pagination', 10));

        return view('expressions.index')->with(compact('expressions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expressions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpressionsRequest $request)
    {
        $data = $request->only([ 'rule_id', 'text' ]);

        Expression::create($data);

        flash('Expression Created', 'success');

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
        $expression = Expression::findOrFail($id);

        return view('expressions.show')->with(compact('expression'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $expression = Expression::findOrFail($id);

        return view('expressions.edit')->with(compact('expression'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpressionsRequest $request, $id)
    {
        $data = $request->only([ 'rule_id', 'text' ]);

        Expression::findOrFail($id)->update($data);

        flash('Expression Updated', 'success');

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
        Expression::destroy($id);

        flash('Expression Deleted', 'danger');

        return redirect()->route('expressions.index');
    }
}
