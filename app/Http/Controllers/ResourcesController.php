<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourcesRequest;
use App\Resource;
use Illuminate\Support\Facades\Cache;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $resources = Resource::orderBy('id', 'desc')->paginate(Cache::get('pagination', 10));

        return view('resources.index')->with(compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResourcesRequest $request)
    {
        $data = $request->only([ 'title', 'rule_id', 'button_text', 'link' ]);

        Resource::create($data);

        flash('Resource Created', 'success');

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
        $resource = Resource::findOrFail($id);

        return view('resources.show')->with(compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $resource = Resource::findOrFail($id);

        return view('resources.edit')->with(compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResourcesRequest $request, $id)
    {
        $data = $request->only([ 'title', 'rule_id', 'button_text', 'link' ]);

        Resource::findOrFail($id)->update($data);

        flash('Resource Updated', 'success');

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
        Resource::destroy($id);

        flash('Resource Deleted', 'danger');

        return redirect()->route('resources.index');
    }
}
