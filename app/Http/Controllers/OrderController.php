<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product', 'user')->get()->groupBy('user_id');

        return view('admin.userorder', compact('orders'));
    }
}
