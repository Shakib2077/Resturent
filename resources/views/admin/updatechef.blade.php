<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
        input[type="submit"] {
            background-color: #af4c4c;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }

    </style>

    <base href="/public">

    @include('admin.admincss')

  </head>
  <body>

    <div class="container-scroller">

      @include('admin.navbar')

        <form action="{{route('updatefoodchef', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label>Chef Name</label>
                <input style="color:blue;" type="text" name="name"
                value="{{$data->name}}">
            </div>
            <div>
                <label>Speciality</label>
                <input style="color:blue;" type="text" name="speciality"
                value="{{$data->speciality}}">
            </div>
            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/chefimage/{{$data->image}}">
            </div>
            <div>
                <label>New Image</label>
                <input type="file" name="image">
            </div>

            <input type="submit" value="Update Chef" required="">

        </form>

    </div>

    @include('admin.adminscript')


  </body>
</html>