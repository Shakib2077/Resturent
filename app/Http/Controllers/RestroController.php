<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurent;

class RestroController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $data =  Restaurent::all();
        return view('list', ["data"=>$data]);
        // return view('list');

    }
    function add(Request $req)
    {
        // return view('add');
        // return $req->input();
        $restro = new Restaurent;
        $restro->name=$req->input('name');
        $restro->email=$req->input('email');
        $restro->address=$req->input('address');
        $restro->save();
        return $req->input();
    }
}
