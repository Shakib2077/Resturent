<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
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
        img {
            height: 200px;
            width: auto;
        }

    </style>
  </head>
  <body>

  <div class="container-scroller">
    @include('admin.navbar')
    <form action="{{ route('uploadchef') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Name</label>
            <input style="color:blue;" type="text" name="name" placeholder="Enter Your Name" required>
        </div>

        <div>
            <label>Speciality</label>
            <input style="color:blue;" type="text" name="speciality" placeholder="Enter Your speciality" required>
        </div>

        <div>
            <input type="file" name="image">
        </div>

        <div>
            <input type="submit" value="Save">
        </div>
    </form>


    <div style="text-align: right;">
      <table bgcolor="black">
          <tr>
            <th style="padding: 30px;">Chef Name</th>
            <th style="padding: 30px;">Speciality</th>
            <th style="padding: 30px;">Image</th>
            <th style="padding: 30px;">Action</th>
            <th style="padding: 30px">Action 2</th>
          </tr>

          @foreach($data as $data)
            <tr align="center">
              <td>{{$data->name}}</td>
              <td>{{$data->speciality}}</td>
              <td><img src="/chefimage/{{$data->image}}" style="height: 100px;"></td>
              <td><a href="{{ route('updatechef',$data->id)}}">Update</a></td>
              <td><a href="{{ route('deletechef',$data->id)}}">Delete</a></td>
            </tr>
          @endforeach

      </table>
    </div>

  </div>

    @include('admin.adminscript')

  </body>
</html>

