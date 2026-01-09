<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function orders()
    {
        $orders = Order::where('user_id', Auth::id())
                      ->with('items.product')
                      ->latest()
                      ->get();
                      
        return view('profile.orders', compact('orders'));
    }

    public function orderDetail($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)
                      ->where('user_id', Auth::id())
                      ->with('items.product')
                      ->firstOrFail();
                      
        return view('profile.order_detail', compact('order'));
    }
}
