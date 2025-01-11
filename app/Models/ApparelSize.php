<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApparelSize extends Model
{
    use HasFactory;
    protected $table = 'apparel_sizes';
    protected $primaryKey = 'size_id';

    protected $fillable = [
        'size_code',
        'sort_order',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'size_id');
    }
}
