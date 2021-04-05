<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable =[
        'title',
        'slug',
        'description',
        'color',
        'discount',
        'category_id',
        'sub_category_id',
        'section_id',
        'quantity',
        'price',
        'publication_status',
        'photo'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','id', 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\Models\SubCategory','id','sub_category_id');
    }

    public function getProductBySlug($slug){
        return Product::with(['category_id'])->where('slug', $slug)->first();
    }

    public static function getAllProduct()
    {
        return Product::with(['category_id'])->orderBy('id','desc')->paginate(10);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class)->whereNotNull('order_id');
    }

    public function size()
    {
        return $this->hasMany(Size::class);
    }
}
