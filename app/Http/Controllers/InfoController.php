<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{


    public function userinfo()
    {
        $user = Auth::user();
        return view('user.userinfo', ['user' => $user]);
    }
    public function transactionHistory()
    {
        $user = Auth::user();
        $orders = Order::with('product')->where('user_id', Auth::id())->get();
        return view('user.riwayat', compact('user', 'orders'));
    }
}
