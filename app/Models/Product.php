<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'picture', 'description', 'price', 'stock_quantity', 'storage_period', 'no_BPOM', 'category', 'weight'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
