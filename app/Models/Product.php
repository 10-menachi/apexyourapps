<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_id',
        'name',
        'description',
        'price',
        'image',
        'featured',
    ];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
