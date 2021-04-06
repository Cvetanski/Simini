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

        return redirect()->route('all-subCategory')->with('message', "Успешно ја избришавте поткатегоријата!");
    }

    public function editSubCategory(int $id)
    {
        $subCategory=SubCategory::findOrFail($id);

        return view('admin.edit_sub_category')->with('subCategory',$subCategory);
    }

    public function updateSubCategory(Request $request, $id)
    {
        DB::table('category_sub_category')->where('sub_category_id','=',$id)->delete();
        DB::table('sub_categories')->update(['title'=>$request->title]);

        $counter = count($request->size);

        for($i = 0 ; $i<$counter; $i++){
            DB::table('category_sub_category')->insert(['category_id'=>$request->size[$i],'sub_category_id'=>$id]);
        }
//        dd('done');

        return redirect()->route('all-subCategory')->with('message','Успешно ја ажуриравте поткатегоријата!');

    }
}
