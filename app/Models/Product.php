<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'price',
        'image',
        'category_id'
    ];

    protected $attributes = [
        'image'   => ''
    ];

    protected $with = ['category'];


    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
