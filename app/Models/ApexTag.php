<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApexTag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $fillable = ['name'];

    // Many-to-many relationship with Product
    
}