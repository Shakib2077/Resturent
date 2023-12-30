@extends('layout')

@section('content')
<div>
    <h1 class="container">List of Resturants</h1>

    <table class="container table table-dark table-striped-columns">
      <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            </tr>
      </thead>
        <tbody class="table-group-divider">
            @foreach($data as $item)
                <tr class="table-group-divider">
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@stop