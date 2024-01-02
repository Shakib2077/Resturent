<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurent;
use Session;
use Hash;
use App\Models\User;

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
        // return $req->input();
        $req->session()->flash('status', "Restaurant Submitted Successfully");
        return redirect('list');
    }
    function delete($id)
    {
        Restaurent::find($id)->delete();
        Session()->flash('status', "Restaurant Deleted Successfully");
        return redirect('list');
    }
    function edit($id)
    {
        $data = Restaurent::find($id);
        return view('edit', ["data"=>$data]);
    }
    function update(Request $req)
    {
        $restro = Restaurent::find($req->input('id'));
        $restro->name=$req->input('name');
        $restro->email=$req->input('email');
        $restro->address=$req->input('address');
        $restro->save();
        $req->session()->flash('status', "Restaurant Updated Successfully");
        return redirect('list');
    }
    function register(Request $req)
    {
        $user = new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Hash::make($req->input('password'));
        $user->contact=$req->input('contact');
        $user->save();
        $req->session()->put('user', $req->input('name'));
        return redirect('/');
    }
}
