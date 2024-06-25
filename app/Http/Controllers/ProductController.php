<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = Product::create($request->all());
        if ($request->hasFile('picture')) {
            $request->file('picture')->move('img/upload/', $request->file('picture')->getClientOriginalName());
            $data->picture = $request->file('picture')->getClientOriginalName();
            $data->save();
        }
        session()->flash('success', 'Data berhasil diinput');
        return redirect()->route('admin.dashboard');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.productedit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'storage_period' => 'nullable|string',
            'no_BPOM' => 'nullable|string',
            'category' => 'nullable|string',
            'weight' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock_quantity = $request->input('stock_quantity');
        $product->storage_period = $request->input('storage_period');
        $product->no_BPOM = $request->input('no_BPOM');
        $product->category = $request->input('category');
        $product->weight = $request->input('weight');

        if ($request->hasFile('picture')) {
            $request->file('picture')->move('img/upload/', $request->file('picture')->getClientOriginalName());
            $product->picture = $request->file('picture')->getClientOriginalName();
        }

        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully');
    }
}
