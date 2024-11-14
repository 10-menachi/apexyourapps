<?php

// app/Models/Review.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;

    protected $table = "product_reviews";

    protected $fillable = ['product_id', 'rating', 'comment', 'user_name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}