<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $col) {
            $col->id();
            $col->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $col->string('order_number')->unique();
            $col->decimal('total_amount', 12, 2);
            $col->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
            $col->string('payment_status')->default('unpaid');
            $col->string('payment_method')->nullable();
            $col->text('shipping_address')->nullable();
            $col->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
