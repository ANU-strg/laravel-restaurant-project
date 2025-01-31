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
            width: 1000px;
        }

        th
        {
            color: white;
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            background-color: red;
            padding: 10px;
        }

        td
        {
            color: white;
            font-weight: bold;

            text-align: center;

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

            <table>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.Telpon</th>
                    <th>Alamat</th>
                    <th>Menu</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Ubah</th>
                </tr>
                
                @foreach ($data as $data)  
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->quantity }}</td>
                    <td>{{ $data->price }}</td>
                    <td><img width="100" src="food_img/{{ $data->image }}" alt=""></td>
                    <td>{{ $data->delivery_status }}</td>
                    <td>
                      <a onclick="return confirm('Apakah anda yakin?')" class="btn btn-info" href="{{ url('on_the_way', $data->id) }}">On the Way</a>
                      <a onclick="return confirm('Apakah anda yakin?')" class="btn btn-warning" href="{{ url('delivered', $data->id) }}">Delivered</a>
                      <a onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger" href="{{ url('canceled', $data->id) }}">Canceled</a>
                    </td>
                </tr>
                @endforeach
            </table>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>