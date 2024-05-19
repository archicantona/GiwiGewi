<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }

    // Fungsi lain

    /**
     * Remove the specified product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect('/admin')->with('message', 'Product deleted successfully');
        }

        return view('admin.dashboard');
    }


    public function create()
    {
        return view('admin.addproduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageContent = null;
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageContent = file_get_contents($image->getRealPath());
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'picture' => $imageContent,
        ]);

        return redirect('/admin/products')->with('success', 'Product added successfully.');
    }
}
