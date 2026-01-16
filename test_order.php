<?php

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    // Need a user
    $user = User::first();
    if (!$user) {
        $user = User::factory()->create();
    }

    echo "Attempting to create order for user {$user->id}...\n";

    $order = Order::create([
        'order_number' => 'TEST-' . strtoupper(Str::random(10)),
        'user_id' => $user->id,
        'total_amount' => 100000,
        'status' => 'pending',
        'payment_status' => 'unpaid',
        'shipping_address' => 'Test Address',
        'shipping_cost' => 50000, // The problematic field
        'payment_method' => 'manual',
        'bank' => 'bca',
    ]);

    echo "Order created successfully! ID: " . $order->id . "\n";
    echo "Shipping Cost saved: " . $order->shipping_cost . "\n";

} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "Trace: " . $e->getTraceAsString() . "\n";
}
