<?php

namespace App\Http\Controllers;

use App\Bakery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BakeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bakeries = Bakery::all();
        return view('layouts.list')->with('list_obj', $bakeries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bakery = new Bakery();
        $action = '/admin/bakery/store';
        return view('layouts.create')
            ->with('bakery', $bakery)
            ->with('action', $action);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bakery = new Bakery();
        $bakery->name = Input::get('name');
        $bakery->categoryId = Input::get('categoryId');
        $bakery->price = Input::get('price');
        $bakery->description = Input::get('description');
        $bakery->images = Input::get('images');
        $bakery->content = Input::get('content');
        $bakery->note = Input::get('note');
        $bakery->save();
        return redirect('/admin/bakery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bakery = Bakery::find($id);
        if ($bakery == null){
            return view('404');
        }
        return view('layouts.list')
            ->with('bakery', $bakery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bakery = Bakery::find($id);
        if ($bakery == null) {
            return view('404');
        }
        return view('layouts.edit')
            ->with('bakery', $bakery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $id = Input::get('id');
        $bakery = Bakery::find($id);
        if ($bakery == null) {
            return view('404');
        }
        $bakery->name = Input::get('name');
        $bakery->categoryId = Input::get('categoryId');
        $bakery->price = Input::get('price');
        $bakery->description = Input::get('description');
        $bakery->images = Input::get('images');
        $bakery->content = Input::get('content');
        $bakery->note = Input::get('note');
        $bakery->save();
        return redirect('/admin/bakery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bakery = Bakery::find($id);
        if ($bakery == null) {
            return view('404');
            return response('Bakery not fount or has been deleted', 404);
        }
        $bakery->delete();
        return redirect('/admin/bakery');
    }

    public function delete($id)
    {
        $bakery = Bakery::find($id);
        if ($bakery == null) {
            return view('404');
        }
        return view('admin.bakery.confirm_delete')->with('bakery', $bakery);
    }
}
