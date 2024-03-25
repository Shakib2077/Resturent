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

    </style>
  </head>
  <body>

  <div class="container-scroller">
    @include('admin.navbar')

        <div style="position: relative; top: 60px; right: -150px;">
            <form action="{{ route('uploadfood') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Title</label>
                    <input style="color: blue;" type="text" name="title" placeholder="Write a Title" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color: blue;" type="num" name="price" placeholder="Enter Price" required>
                </div>

                <div>
                    <label>Image</label>
                    <input style="color: blue;" type="file" name="image" required>
                </div>

                <div>
                    <label>Description</label>
                    <input style="color: blue;" type="text" name="description" placeholder="Enter a Description" required>
                </div>

                <div>
                    <input type="submit" value="Save">
                </div>
            </form>

            <div>
                <table bgcolor="black">
                    <tr>
                        <th style="padding: 30px">Item ID</th>
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                        <th style="padding: 30px">Action 2</th>
                    </tr>


                    @foreach($data as $item)
                    <tr align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->description}}</td>
                        <td><img height="150" width="150" src="/foodimage/{{$item->image}}" ></td>
                        <td><a href="{{ route('deletemenu',$item->id) }}">Delete</a></td>
                        <td><a href="{{ route('updateview',$item->id) }}">Update</a></td>
                    </tr>
                    @endforeach

                </table>
            </div>

        </div>
   </div>

    @include('admin.adminscript')

  </body>
</html>