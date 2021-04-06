<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::orderBy('id','DESC')->paginate(10);
        return view('admin.all_order')->with('orders',$orders);
    }

    public function delete(int $id)
    {
        $order = Order::findOrFail($id);

        $order->delete();
    }


    public  function generateRandomString($length = 20)
    {
        $characters = '0123456789-ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function show($id)
    {
        $orders=Order::findOrFail($id);
//        dd($orders);
        // return $order;
        return view('admin.order_show')->with('orders',$orders);
    }

    public function pdf(Request $request)
    {
        $order=Order::getAllOrder($request->id);
        // return $order;
        $file_name=$order->order_number.'-'.$order->first_name.'.pdf';
        // return $file_name;
        $pdf=PDF::loadview('backend.order.pdf',compact('order'));
        return $pdf->download($file_name);
    }

}
