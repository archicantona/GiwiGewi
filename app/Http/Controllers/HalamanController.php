<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HalamanController extends Controller
{

    public function produk()
    {
        $products = Product::all();
        return view('user.produk', compact('products'));
    }

    public function detailproduk($id)
    {
        $product = Product::findOrFail($id);
        return view('user.detailproduk', compact('product'));
    }
}
