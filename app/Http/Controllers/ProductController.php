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
        $data = Product::create($request->all());
        if ($request->hasFile('picture')) {
            $request->file('picture')->move('img/upload/', $request->file('picture')->getClientOriginalName());
            $data->picture = $request->file('picture')->getClientOriginalName();
            $data->save();
        }
        session()->flash('success', 'Data berhasil diinput');
        return redirect()->route('admin.dashboard');
    }
}
