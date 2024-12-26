<!DOCTYPE html>
<html>
  <head>
    <!-- CSS files -->
    @include('admin.css')

    <style>
      table
      {
        border: 1px solid skyblue;
        margin: auto;
        width: 800px;
      }

      th
      {
        background: skyblue;
        color: white;
        padding: 10px;
        margin: 10px;
      }

      td
      {
        color:white;
        padding: 10px;

      }
    </style>
  </head>
  <body>
        @include('admin.header')
    
        @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>All Food</h1>

            <div>
              @foreach ($data as $data)
                  
              <table>
                  <tr>
                      <th>Food Title</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Image</th>
                  </tr>

                  <tr>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->detail }}</td>
                    <td>{{ $data->price }}</td>
                    <td><img width="150" src="food_img/{{ $data->image }}" alt=""></td>
                  </tr>
              </table>
              @endforeach
            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>