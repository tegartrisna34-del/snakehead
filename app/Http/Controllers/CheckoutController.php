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
            'user_id' => auth()->id(),
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
        $order = Order::where('order_number', $orderNumber)->firstOrFail();
        return view('checkout_success', compact('order'));
    }

    /**
     * Demo shipping cost endpoint. 
     * To integreat with ongkoskirim.id:
     * 1. Register at ongkoskirim.id to get API Key
     * 2. Use Http::withHeaders(['key' => 'YOUR_KEY'])->post('https://api.ongkoskirim.id/v1/cost', ...)
     */
    public function shippingCost(Request $request)
    {
        $request->validate([
            'courier' => 'required|string',
            'destination_city' => 'required|string',
        ]);

        // Mock Logic for Demo
        $baseRates = [
            'jne' => 15000,
            'jnt' => 14000,
            'sicepat' => 13000,
            'pos' => 12000,
        ];

        $courier = strtolower($request->courier);
        $base = $baseRates[$courier] ?? 15000;
        
        $city = strtolower($request->destination_city);
        $multiplier = 1.0;

        // Simple distance simulation based on city name
        if (str_contains($city, 'jakarta') || str_contains($city, 'bogor') || str_contains($city, 'depok') || str_contains($city, 'tangerang') || str_contains($city, 'bekasi')) {
            $multiplier = 1.0; // Jabodetabek
        } elseif (str_contains($city, 'bandung') || str_contains($city, 'semarang') || str_contains($city, 'yogyakarta') || str_contains($city, 'surabaya')) {
            $multiplier = 1.2; // Java Main Cities
        } elseif (str_contains($city, 'medan') || str_contains($city, 'palembang') || str_contains($city, 'makassar') || str_contains($city, 'denpasar')) {
            $multiplier = 1.8; // Outer Islands
        } else {
            $multiplier = 1.5; // Others
        }

        $cost = (int) round($base * $multiplier);

        return response()->json([
            'success' => true,
            'courier' => strtoupper($courier),
            'destination' => $request->destination_city,
            'cost' => $cost,
            'service' => 'REG (Regular)',
            'etd' => '2-3 Days',
            'currency' => 'IDR'
        ]);
    }
}
