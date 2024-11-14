<?php

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
        'warranty',
        'qr_code',
        'sku',
        'payment_and_credit',
        'main_avatar',
        'avatar_2',
        'avatar_3',
        'avatar_4',
        'avatar_5',
        'avatar_6',
        'avatar_7',
        'tag_id',
        'featured',
    ];

    // Relationship with SubCategory
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    // Relationship with ProductDetail
    public function details()
    {
        return $this->hasMany(ProductDetail::class);
    }

    // Relationship with ProductReview
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    // Many-to-many relationship with Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag', 'product_id', 'tag_id');
    }

    // Scope to get featured products
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    // Accessor for formatted price
    public function getFormattedPriceAttribute()
    {
        return 'Kes' . number_format($this->price, 2);
    }


    // product varaints that the Colors and models
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    // Accessor to get the image URL
    public function getImageUrlAttribute()
    {
        return asset('uploads/product_avatars' . $this->image);
    }
}