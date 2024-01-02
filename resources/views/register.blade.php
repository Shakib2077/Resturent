@extends('layout')

@section('content')
<div class="container col-sm-6">
    <h1>Register Page Here</h1>
        <form action="register" method="POST">
                @csrf
                <div class="from-group">
                    <label>Name</label>
                    <input type="name" name="name" class="form-control" placeholder="Enter name">
                </div><br>
                <div class="from-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div><br>
                <div class="from-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div><br>
                <div class="from-group">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" placeholder="Contact number">
                </div><br>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
</div>
@stop