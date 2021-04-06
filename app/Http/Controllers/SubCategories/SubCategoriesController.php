<?php

namespace App\Http\Controllers\SubCategories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoriesController extends Model
{
    public function index()
    {
        return view('admin.add_sub_categories');
    }

    public function saveSubCategory(Request $request)
    {
//        $subCategory = new SubCategory($request->all());

//        $subCategory->save();
//

////        $category = Category::findOrFail($categoryId);
//        $categoryId = (int)$request->get('id');
//        $category = Category::all;
//
//        $subCategory->category()->attach(15);


//
//        dd($request->all());

//        $subCategory = SubCategory::create($request->title);
//        dd($request->all());

        $counter = count($request->size);
        DB::table('sub_categories')->insert(['title'=>$request->title]);
        $lastId = SubCategory::all()->last()->id;

        for($i = 0 ; $i<$counter; $i++){
            DB::table('category_sub_category')->insert(['category_id'=>$request->size[$i],'sub_category_id'=>$lastId]);
        }

//        DB::table('category_sub_category')->insert(['category_id'=>$request->size,'sub_category_id'=>$lastId]);

//        dd($request->id);
//        $subCategory->category()->attach($category);

//        $category->subCategory()->attach($subCategory);

        return redirect()->route('all-subCategory')->with('message','УСПЕШНО ДОДАДОВТЕ ПОТКАТЕГОРИЈА!');
    }

    public function allSubCategory()
    {
        $subCategories = SubCategory::all();

        return view('admin.all_sub_categories',['subCategories'=>$subCategories]);
    }

    public function deleteSubCategory( $id)
    {
        $category = SubCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('all-category')->with('message', "Успешно ја избришавте категоријата!");
    }

    public function editSubCategory(int $id)
    {
        $category=SubCategory::findOrFail($id);

        return view('admin.edit_category')->with('category',$category);
    }


}
