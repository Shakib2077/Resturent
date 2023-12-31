@extends('layout')

@section('content')
    <div class="container">
        <div class="col-sm-6"> 
            <h1 class="container">Edit Restaurants</h1>

            <div class="container">
            <form action="/edit" method="POST">
                @csrf
                <div class="from-group">
                    <label>Name</label>
                    <input type="hidden" name="id" value="{{$data->id}}">

                    <input type="name" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter name">
                </div><br>
                <div class="from-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email">
                </div><br>
                <div class="from-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Enter address">
                </div><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            
        </div>
    </div>
@stop