<?php
/**
 * Created by PhpStorm.
 * User: Phuong Anh
 * Date: 7/17/2018
 * Time: 6:38 PM
 */

namespace App\Http\Controllers;


use App\Bakery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class BakeryController extends Controller
{
    public function index() {

//        $bakeries = DB::select('select * from bakeries');
//        return view('admin.bakery.list') -> with('bakeries_in_view', $bakeries);

        // Gọi theo kiểu static, không phải viết câu lệnh sql
        $bakeries = Bakery::all();
        return view('admin.bakery.list')
            -> with('bakeries_in_view', $bakeries);
    }

    public function show(){}

    public function create(){
        $bakery = new Bakery();
        $action = '/admin/bakery/store';
        return view('admin.bakery.form') -> with('bakery', $bakery) -> with('action', $action);
    }

    public function store(Request $request){
        $name = $request -> input('name');
        $categoryId = $request -> input('categoryId');
        $price = $request -> input('price');
        $description = $request -> input('description');
        $image = $request -> input('image');
        $detail = $request -> input('detail');
        $note = $request -> input('note');
//        DB::insert('insert into bakeries (name, categoryId, price, description, image, detail, note) values (?,?,?,?,?,?,?)'
//            , [$name, $categoryId, $price, $description, $image, $detail, $note]);
        return 'Saved success!';
    }

    public function edit($id){
        $action = '/admin/bakery/update';
//        $bakery = DB::selectOne('select * from bakeries where id = ?', [$id]);
        $bakery = Bakery::find($id);
        if($bakery == null){
            return view('404');
        }
        return view('admin.bakery.form')
            -> with('bakery', $bakery)
            -> with('action', $action);
    }

    public function update(){
//        $id = $request -> input('id');
        $id = Input::get('id');
        $bakery = Bakery::find($id);
//        $bakery = DB::selectOne('select * from bakeries where id = ?', [$id]);
        if($bakery == null){
            return view('404');
        }
//        $name = $request -> input('name');
//        $categoryId = $request -> input('categoryId');
//        $price = $request -> input('price');
//        $description = $request -> input('description');
//        $image = $request -> input('image');
//        $detail = $request -> input('detail');
//        $note = $request -> input('note');
//        DB::update('update bakeries set name = ?, categoryId = ?, price = ?, description = ?, image = ?, detail = ?, note = ? where id = ?'
//            , [$name, $categoryId, $price, $description, $image, $detail, $note, $id]);

        $bakery -> name(Input::get('name'));
        $bakery -> categoryId(Input::get('categoryId'));
        $bakery -> price(Input::get('price'));
        $bakery -> description(Input::get('description'));
        $bakery -> images(Input::get('images'));
        $bakery -> content(Input::get('content'));
        $bakery -> note(Input::get('note'));
        $bakery -> save();
        return redirect('/admin/bakery/list');
    }

    public function delete(){}

    public function destroy(){

    }
}