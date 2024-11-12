<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the fillable properties for mass assignment
    protected $fillable = [
        'subcategory_id',
        'name',
        'description',
        'price',
        'model',
        'color',
        'warranty',
        'payment_and_credit',
        'image',
        'featured',
    ];

    /**
     * Define the relationship with the subcategory.
     * Assuming a Product belongs to a single SubCategory.
     */
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    /**
     * Define the relationship with product details.
     * A product has many details that fall into different specification categories.
     */
    public function details()
    {
        return $this->hasMany(ProductDetail::class);
    }

    /**
     * Define the relationship with reviews.
     * A product can have many reviews from customers.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get featured products only.
     * A scope method to allow easy retrieval of featured products.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Accessor to get the formatted price with currency symbol.
     */
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }

    /**
     * Accessor to return the product's image URL.
     * Assuming images are stored in the 'storage/app/public/images/' directory.
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/images/' . $this->image);
    }
}