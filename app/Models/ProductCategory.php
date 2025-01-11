<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_categories';

    public $timestamps = false;
    
    protected $fillable = [
        'product_id',
        'category_id',
    ];
}
