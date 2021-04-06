<?php

namespace App\Http\Controllers\frontend_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{
    public function show_all_products(){
        $products = DB::table('products')->paginate(16);
        

        return view('client.products',['products'=>$products]);
    }

}
