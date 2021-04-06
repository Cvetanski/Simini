<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\PDF;
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

    public function pdf(Request $request, int $id)
    {
//        $orders = Order::findOrFail($id);
//        view()->share('orders',$orders);
//        if($request->has('download')){
//            PDF::setOptions(['dpi'=>'150','defaultFont'=>'sensi-serif']);
//            $pdf = PDF::loadView('order_show');
//
//            return $pdf->download('order_show');
//        }
//        return view('admin.order_pdf');

//        $orders=Order::all();
//        // return $order;
//        $file_name=$orders->order_number.'-'.$orders->first_name.'.pdf';
//        // return $file_name;
//        $pdf=PDF::loadview('admin.order_pdf',compact('orders'));
//
//        return $pdf->download($file_name);

        // retreive all records from db
        $orders = Order::all();

        // share data to view
        view()->share('orders',$orders);
        $pdf = PDF::loadView('order_show', $orders);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }

}
