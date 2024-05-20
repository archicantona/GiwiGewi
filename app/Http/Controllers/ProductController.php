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
            'picture' => 'nullable|image|max:2048', // Validasi gambar
        ]);

        // Simpan gambar jika ada
        $picture = null;
        if ($request->hasFile('picture')) {
            $picture = file_get_contents($request->file('picture')->getRealPath());
        }

        // Simpan data
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;
        $product->picture = $picture;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product berhasil ditambahkan');
    }
}
