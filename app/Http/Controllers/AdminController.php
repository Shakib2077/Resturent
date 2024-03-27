<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;

class AdminController extends Controller
{
    public function users(){

        $data=user::all();
        return view('admin.users',compact('data'));
    }

    public function deleteuser($id){

        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu(){
        $data = food::all();
        return view('admin.foodmenu',compact('data'));
    }

    public function uploadfood(Request $request) {

            $data= new Food;
            $image=$request->image;
            $imageName=time(). '.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imageName);
            $data->image=$imageName;
            $data->title=$request->title;
            $data->price=$request->price;
            $data->description=$request->description;
            $data->save();
            return redirect()->back()->with('error', 'No file uploaded.');
      }

      public function deletemenu($id){

        $data = food::find($id);
        $data->delete();
        return redirect()->back();
      }

      public function updateview($id){

        $data = food::find($id);
        return view('admin.updateview',compact('data'));
      }

      public function update(Request $request, $id){

        $data = food::find($id);
        $image=$request->image;
        $imageName=time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imageName);
        $data->image=$imageName;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back()->with('error', 'No file uploaded.');

      }

      public function reservation(Request $request){

        $data = new reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
      }

      public function viewreservation(){

        $data = reservation::all();
        return view('admin.adminreservation',compact('data'));

      }
}
