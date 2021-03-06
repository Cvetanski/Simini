<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'title'
    ];

    public function subCategory()
    {
        return $this->belongsToMany(
            SubCategory::class,
                    'category_sub_category',
                    'category_id',
                    'sub_category_id');
    }

    public function get():int
    {
        return (int)$this->getAttribute('category_id');
    }

    public function getBooksByCategory($slug)
    {
        return Category::with('books')->where('slug', $slug)->first();
    }

    public function getCategory():string
    {
        return $this->getAttribute('category');
    }

    public function setCategory(string  $category)
    {
        $this->setAttribute($category, 'category');
    }

    public static function getAllParentWithChild()
    {
        return Category::with('child_cat')->where('is_parent',1)->where('status','active')->orderBy('title','ASC')->get();
    }

    public function product()
    {
        return $this->belongsToMany(Product::class,'products','category_id');
    }
}
