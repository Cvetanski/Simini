<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.add_product');
    }

    public function saveProduct(Request $request )
    {
        $request->validate([
            'title'=>'string|required',
            'description'=>'string|required',
            'quantity'=>'required|string',
            'price'=>'string|required',
            'publication_status'=>'string|required',
            'category_id'=>'required|exists:categories,id',
            'sub_category_id'=>'required|exists:sub_categories,id',
            'section_id'=>'required|exists:sections,id',
            'size'=>'required|string',
            'color'=>'required|string',
            'discount'=>'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data=$request->all();

        $slug=Str::slug($request->title);
        $count=Product::where('slug', $slug)->count();
        if($count>0){
            $slug=$slug.' - '.date('ymdis'). ' - '.rand(0,999);
        }

        $price=($request->price);
        $discount=($request->discount);
        $priceWithDiscount = ($price - $discount);

        if($discount == null){
            $priceWithDiscount = $price;
        }else{
            ($discount !==  null);
            $priceWithDiscount = ($price - $discount);
        }

        $data['slug']=$slug;
        $data['price']=$priceWithDiscount;

        $request->photo->extension();
        $newImageName = time() . ' - ' .$request->name . ' . ' .

        $request->photo->extension();
        $data['photo']=$newImageName;

        $request->photo->move(public_path('images'), $newImageName);

        $product = Product::create( $data);

        $counter = count($request->size);
        DB::table('sub_categories')->insert(['title'=>$request->title]);
        $lastId = SubCategory::all()->last()->id;

        for($i = 0 ; $i<$counter; $i++){
            DB::table('category_sub_category')->insert(['category_id'=>$request->size[$i],'sub_category_id'=>$lastId]);
        }

        if($product){
            request()->session()->flash('success','Успешно додадовте продукт!');
        }
        else{
            request()->session()->flash('error','Ве молиме обидете се повтроно');
        }

        return redirect()->route('all-product')->with('message','Успешно додадовте продукт!');

    }

    public function allProduct()
    {
        $products = DB::table('products')
            ->get()
            ->where('section_id', 1);
        $menageBook = view('admin.all_products')
            ->with('products', $products);

        return view('admin.admin_layout')
            ->with('admin.all_products', $menageBook);
    }
//
//    public function unactiveBook(int $id)
//    {
//        DB::table('books')
//            ->where('id', $id)
//            ->update(['publication_status'=>0]);
//        Session::put('message','Содржината е успешно деактивирана!');
//
//        return redirect::to('all-book');
//    }
//
//    public function deleteProduct(int $id)
//    {
//        $book = Product::find($id);
//
//        $book->delete();
//
//        return redirect('all-book')->with('message','Успешно ја избришавте книгата');
//    }
//
//    public function activeProduct(int $id)
//    {
//        DB::table('books')
//            ->where('id', $id)
//            ->update(['publication_status'=>1]);
//        Session::put('message','Содржината е успешно активирана !');
//
//        return redirect::to('all-book');
//    }
//
//    public function editProduct(int $id)
//    {
//        $bookInfo = Product::findOrFail($id);
//        $category = Category::where('category')->get();
//
//        return view('admin.edit_book');
//    }
}
