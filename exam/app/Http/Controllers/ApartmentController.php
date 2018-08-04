<?php

namespace App\Http\Controllers;

use App\Apartment;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::get()->paginate(6);;
        return view('list')
            ->with('apartments', $apartments);
    }
}
