<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>

    <div class="container-scroller">
      @include('admin.navbar')
    <div class="container">
      <h1>Customers Orders</h1>

      <form action="{{ route('search')}}" method="get">

        @csrf
          <input type="text" name="search" style="color:blue;">
          <input type="submit" value="search" class="btn btn-success">
      </form>

      <table>

        <tr align="center">
            <td style="padding: 30px;">Name</td>
            <td style="padding: 30px;">Phone</td>
            <td style="padding: 30px;">Address</td>
            <td style="padding: 30px;">Foodname</td>
            <td style="padding: 30px;">Price</td>
            <td style="padding: 30px;">Quantity</td>
            <td style="padding: 30px;">Total Price</td>

        </tr>
        @foreach ($data as $item)


        <tr align="center" style="background-color: black;">
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->foodname}}</td>
            <td>{{$item->price}}$</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price * $item->quantity}}</td>

        </tr>
        @endforeach

      </table>
      <div>
    </div>

    @include('admin.adminscript')


  </body>
</html>