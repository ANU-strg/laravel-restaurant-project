<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Food;

class AdminController extends Controller
{
    public function add_food ()
    {
        return view('admin.add_food');
    }

    public function view_food ()
    {
        $data = Food::all();
        return view('admin.show_food', compact('data'));
    }

    public function upload_food (Request $request)
    {
        $data = new Food;

        $data->title = $request->title;

        $data->detail = $request->details;

        $data->price = $request->price;



        $image = $request->img;

        $filename = time().'.'.$image->getClientOriginalExtension();

        $request->img->move('food_img',$filename);

        $data->image = $filename;



        $data->save();

        return redirect()->back();
    }
}
