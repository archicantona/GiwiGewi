<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HalamanController extends Controller
{
    public function getRandomProducts()
    {
        $randomProducts = DB::table('products')->inRandomOrder()->take(3)->get();
        return view('user.home', compact('randomProducts'));
    }
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
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);
        
        // Check if the product is already in the cart
        $existingCart = Cart::where('user_id', Auth::id())
        ->where('product_id', $request->input('product_id'))
        ->first();
        
        if ($existingCart) {
            // If the product is already in the cart, just update the quantity
            $existingCart->quantity += $request->input('quantity');
            $existingCart->save();
        } else {
            // If the product is not in the cart, create a new cart entry
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $request->input('product_id');
            $cart->quantity = $request->input('quantity');
            $cart->save();
        }
        
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
    public function removeFromCart(Request $request)
    {
        $cartId = $request->input('cart_id');
        
        $cartItem = Cart::where('id', $cartId)->where('user_id', Auth::id())->first();
        
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['success' => 'Item removed from cart.']);
        }
        
        return response()->json(['error' => 'Item not found in cart.'], 404);
    }
    
    public function getCart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        return response()->json($cartItems);
    }
    
    public function checkout(Request $request)
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        
        if ($cartItems->isEmpty()) {
            return redirect()->back()->withErrors(['Keranjang kosong!']);
        }
        
        foreach ($cartItems as $item) {
            Order::create([
                'user_id' => $userId,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'order_date' => now(),
                'status' => 'selesai',
            ]);
        }
        
        // Hapus semua item di keranjang setelah checkout
        Cart::where('user_id', $userId)->delete();
        
        // Flash success message to session
        Session::flash('success', 'Checkout berhasil!');
        
        return redirect()->route('produk');
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")->get();
        
        return view('user.produk', compact('products'));
    }
}
