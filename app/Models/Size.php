<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    protected $fillable = [
        'size'
    ];

//    public function product()
//    {
//        return $this->belongsToMany(Product::class,'products');
//    }

    public function product()
    {
        return $this->belongsToMany(
            Product::class,
            'product_size',
            'size_id',
            'product_id')->withPivot('quantity');
    }

}
