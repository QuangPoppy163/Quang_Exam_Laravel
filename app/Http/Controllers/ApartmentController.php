<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $list_obj = Apartments::paginate(6);
        return view('home.apartment.list')->with('list_obj', $list_obj);
    }
}
