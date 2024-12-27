<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
    <!-- CSS files -->
    @include('admin.css')

    <style>
        .div_deg
        {
            padding: 10px;  
        }

        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
        @include('admin.header')
    
        @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1>Update food</h1>

            <form action="{{ url('edit_food', $food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label for="">Food title</label>
                    <input type="text" name="title" value="{{ $food->title }}">
                </div>

                <div class="div_deg">
                    <label for="">Details</label>
                    <textarea name="details" id="" cols="50" rows="5">{{ $food->detail }}</textarea>
                </div>

                <div class="div_deg">
                    <label for="">Price</label>
                    <input type="text" name="price" value="{{ $food->price }}">
                </div>

                
                <div class="div_deg">
                    <label for="">Current image</label>
                    <img width="150" src="food_img/{{ $food->image }}" alt="">
                </div>

                <div class="div_deg">
                    <label for="">Change image</label>
                    <input type="file" name="image">
                </div>

                <div class="div_deg">
                    <input class="btn btn-warning" type="submit" value="Update food">
                </div>
            </form>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>