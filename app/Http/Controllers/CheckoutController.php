<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('home')->with('error', 'Keranjang belanja masih kosong!');
        }
        return view('checkout', compact('cart'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'payment_method' => 'required|in:transfer,cod',
            'bank' => 'nullable|string',
            'shipping_cost' => 'nullable|numeric'
        ]);

        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        $shippingCost = $request->input('shipping_cost', 0);
        $total += $shippingCost;

        $order = Order::create([
            'order_number' => 'ORD-' . strtoupper(Str::random(10)),
            'total_amount' => $total,
            'status' => 'pending',
            'payment_status' => 'unpaid',
            'shipping_address' => $request->address,
            'shipping_cost' => $shippingCost,
            'payment_method' => $request->payment_method,
            'bank' => $request->bank,
        ]);

        foreach ($cart as $id => $details) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('checkout.success', $order->order_number);
    }

    public function success($orderNumber)
    {
        return view('checkout_success', compact('orderNumber'));
    }

    /**
     * Demo shipping cost endpoint. Replace with real API integration (ongkoskirim.id)
     */
    public function shippingCost(Request $request)
    {
        $request->validate([
            'courier' => 'required|string',
            'destination_city' => 'required|string',
        ]);

        // Simple demo tariff table (IDR) - in real app call ongkoskirim.id API
        $base = [
            'jne' => 15000,
            'jnt' => 14000,
            'sicepat' => 13000,
        ];

        $multiplier = 1;
        $city = strtolower($request->destination_city);
        // crude distance-like multiplier examples
        if (strpos($city, 'jakarta') !== false) $multiplier = 1;
        elseif (strpos($city, 'purworejo') !== false) $multiplier = 1.1;
        else $multiplier = 1.4;

        $courier = strtolower($request->courier);
        $cost = isset($base[$courier]) ? (int) round($base[$courier] * $multiplier) : (int) round(18000 * $multiplier);

        return response()->json([
            'success' => true,
            'courier' => $courier,
            'destination' => $request->destination_city,
            'cost' => $cost,
            'currency' => 'IDR'
        ]);
    }
}
