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
        try {
            \Illuminate\Support\Facades\Log::info('Checkout Processing Started', $request->all());

            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
                'payment_method' => 'required|in:transfer,cod,qris,ewallet',
                'bank' => 'nullable|string',
                'shipping_cost' => 'nullable|numeric'
            ]);

            $cart = session()->get('cart', []);
            \Illuminate\Support\Facades\Log::info('Cart Contents', $cart);
            
            if (empty($cart)) {
                \Illuminate\Support\Facades\Log::warning('Cart is empty during process');
                return redirect()->route('home')->with('error', 'Keranjang belanja kosong!');
            }

            $total = 0;
            foreach ($cart as $id => $details) {
                $total += $details['price'] * $details['quantity'];
            }

            $shippingCost = $request->input('shipping_cost', 0);
            $total += $shippingCost;

            \Illuminate\Support\Facades\Log::info('Creating Order', ['user_id' => auth()->id(), 'total' => $total, 'shipping' => $shippingCost]);

            $order = Order::create([
                'order_number' => 'ORD-' . strtoupper(Str::random(10)),
                'user_id' => auth()->id(),
                'total_amount' => $total,
                'status' => 'pending',
                'payment_status' => 'unpaid',
                'shipping_address' => $request->address . ', ' . $request->city, // Append City
                'shipping_cost' => $shippingCost,
                'payment_method' => $request->payment_method,
                'bank' => $request->bank,
            ]);

            \Illuminate\Support\Facades\Log::info('Order Created', ['order_id' => $order->id]);

            foreach ($cart as $id => $details) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $id,
                    'quantity' => $details['quantity'],
                    'price' => $details['price'],
                ]);
            }

            session()->forget('cart');
            
            \Illuminate\Support\Facades\Log::info('Redirecting to Success');
            return redirect()->route('checkout.success', $order->order_number);

        } catch (\Illuminate\Validation\ValidationException $e) {
            \Illuminate\Support\Facades\Log::error('Validation Error', $e->errors());
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Checkout Error: ' . $e->getMessage());
            \Illuminate\Support\Facades\Log::error($e->getTraceAsString());
            return redirect()->back()->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
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
            'province_name' => 'nullable|string',
        ]);

        $quantity = $request->input('quantity', 1);
        $weight = ceil($quantity / 3); // 1kg per 3 items

        $provinceName = strtoupper($request->input('province_name', ''));

        // Custom Logic requested by user:
        // 1. Jawa Tengah -> 10,000
        // 2. Other Java (Jakarta, Banten, Yogyakarta, Jawa Timur, Jawa Barat) -> 15,000
        // 3. Outside Java -> 25,000

        if (str_contains($provinceName, 'JAWA TENGAH')) {
            $ratePerKg = 10000;
        } elseif (
            str_contains($provinceName, 'JAWA') || 
            str_contains($provinceName, 'BANTEN') || 
            str_contains($provinceName, 'JAKARTA') || 
            str_contains($provinceName, 'YOGYAKARTA')
        ) {
            $ratePerKg = 15000;
        } else {
            // Outside Java
            $ratePerKg = 25000;
        }

        $cost = ($ratePerKg * $weight);

        return response()->json([
            'success' => true,
            'courier' => strtoupper($request->courier),
            'destination' => $request->destination_city,
            'cost' => $cost,
            'province' => $provinceName,
            'rate_per_kg' => $ratePerKg,
            'service' => 'REG (Regular)',
            'etd' => '2-3 Days',
            'currency' => 'IDR'
        ]);
    }
}
