<?php

// app/Models/ProductDetail.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'category', 'key', 'value'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
