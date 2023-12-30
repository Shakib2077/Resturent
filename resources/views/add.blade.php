@extends('layout')

@section('content')
    <div class="container">
        <div class="col-sm-6"> 
            <h1 class="container">Add all Resturants</h1>

            <div class="container">
            <form action="add" method="POST">
                @csrf
                <div class="from-group">
                    <label>Name</label>
                    <input type="name" name="name" class="form-control" placeholder="Enter name">
                </div><br>
                <div class="from-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                </div><br>
                <div class="from-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter address">
                </div><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            
        </div>
    </div>
@stop