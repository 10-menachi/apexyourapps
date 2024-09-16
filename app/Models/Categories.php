<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function brands()
    {
        return [
            'Apple Iphone',
            'Samsung',
            'Xiaomi',
            'Nokia',
            'Mazu'
        ];
    }
}
