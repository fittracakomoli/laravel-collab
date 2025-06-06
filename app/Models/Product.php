<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    public function scopeExpensive($query, $price = 1000)
    {
        return $query->where('price', '>', $price)->orderBy('price', 'desc');
    }

    public static function averagePrice()
    {
        return DB::table('products')->avg('price');
    }


}
