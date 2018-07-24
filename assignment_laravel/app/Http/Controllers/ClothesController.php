<?php

namespace App\Http\Controllers;

use App\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Clothes::all();
        return view('admin.clothes.list_clothes')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clothes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Clothes();
        $obj->name = Input::get('name');
        $obj->categoryId = Input::get('categoryId');
        $obj->price = Input::get('price');
        $obj->images = Input::get('images');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('/admin/clothes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Clothes::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.clothes.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Clothes::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.clothes.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Clothes::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->categoryId = Input::get('categoryId');
        $obj->price = Input::get('price');
        $obj->images = Input::get('images');
        $obj->description = Input::get('description');
        $obj->save();
        return redirect('/admin/clothes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Clothes::find($id);
        if ($obj == null) {
            return response('Clothes not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
