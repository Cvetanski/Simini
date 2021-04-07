<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

    protected $fillable =[
        'title'
    ];

    public function category()
    {
        return $this->belongsToMany(
            Category::class,
            'category_sub_category',
            'sub_category_id',
            'category_id');
    }



}
