@extends('layout')

@section('content')
<div>
    <h1 class="container">List of Restaurants</h1>
    @if(Session::get('status'))
        <div class="container alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('status')}}        
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="container table table-dark table-striped-columns">
      <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th>Operations</th>
            </tr>
      </thead>
        <tbody class="table-group-divider">
            @foreach($data as $item)
                <tr class="table-group-divider">
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>
                    <a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
                    <a href="edit/{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@stop