<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->hasOne(Category::class,  'id', 'categoryId');
    }
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class,  'id_product', 'id');
    }
}
