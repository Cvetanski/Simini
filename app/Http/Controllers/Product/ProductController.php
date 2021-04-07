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
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.add_product',
        [
            'sizes' => Size::all(),
        ]);
    }


    private function mapQuantity($size)
    {
        return collect($size)->map(function ($i) {
            return ['quantity' => $i];
        });
    }

    public function saveProduct(Request $request)
    {
        $request->validate([
            'product_number'=>'string|required',
            'title'=>'string|required',
            'description'=>'string|required',
            'quantity'=>'required|string',
            'price'=>'string|required',
            'publication_status'=>'string|required',
            'category_id'=>'required|exists:categories,id',
            'sub_category_id'=>'required|exists:sub_categories,id',
            'section_id'=>'required|exists:sections,id',
//            'size'=>'required|string',
            'color'=>'required|string',
            'discount'=>'required|string',
            'photo' => 'required|image',
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

        $product = new Product($data);

        $product->save();

//        $product->size()->attach($data['size'])->pivot([‘quantity’ => $quantity]);


        $product->size()->sync($this->mapQuantity($data['size']));


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
    public function deleteProduct(int $id)
    {
        $book = Product::findOrFail($id);

        $book->delete();

        return redirect('all-product')->with('message','Успешно го избришавте продуктот');
    }
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
    public function editProduct(int $id)
    {
        $bookInfo = Product::findOrFail($id);
        $category = Category::where('category')->get();

        return view('admin.edit_book');
    }
}
