<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;

    // Specify the table name if it's not the default "tags"
    protected $table = 'product_tag';

    // Define which attributes are mass assignable
    protected $fillable = ['product_id','tag_id'];

    /**
     * Relationship with Product model.
     * 
     * Defines a many-to-many relationship where a tag can belong to many products.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tag', 'tag_id', 'product_id');
    }


}