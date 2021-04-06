<?php

namespace App\Http\Controllers\frontend_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{


    public function showHomePage(){

        $products_categories = DB::table('categories')->get();
        return view('client.home',['products_categories'=>$products_categories]);

    }

    public function showFilteredProducts($name){


        $id = DB::table('categories')->where('title','=',$name)->get('id');
        $products = DB::table('products')->where('category_id','=',$id[0]->id)->paginate(16);

        $products_categories = DB::table('categories')->get();


        return view('client.products',['products'=>$products,'products_categories'=>$products_categories]);

    }

}
