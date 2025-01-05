<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;

class AdminController extends Controller
{
    private function getCounts()
    {
        return [
            'foodCount' => Food::count(),
            'orderCount' => Order::count()
        ];
    }

    public function add_food()
    {
        $counts = $this->getCounts();
        return view('admin.add_food', $counts);
    }

    public function view_food()
    {
        $data = Food::all();
        $counts = $this->getCounts();
        return view('admin.show_food', compact('data') + $counts);
    }

    public function upload_food(Request $request)
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
        return redirect()->back()->with('message', 'Food uploaded successfully!');
    }

    public function delete_food($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Food deleted successfully!');
    }

    public function update_food($id)
    {
        $food = Food::find($id);
        $counts = $this->getCounts();
        return view('admin.update_food', compact('food') + $counts);
    }

    public function edit_food(Request $request, $id)
    {
        $data = Food::find($id);
        $data->title = $request->title;
        $data->detail = $request->details;
        $data->price = $request->price;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('food_img', $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect('view_food')->with('message', 'Food updated successfully');
    }

    public function orders()
    {
        $data = Order::all();
        $counts = $this->getCounts();
        return view('admin.order', compact('data') + $counts);
    }
}