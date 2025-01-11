<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;
    protected $table = 'colors';
    protected $primaryKey = 'color_id';
    protected $fillable = [
        'color_code',
        'color_name',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_colors', 'color_id', 'product_id');
    }
}
