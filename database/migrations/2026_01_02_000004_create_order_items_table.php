<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $col) {
            $col->id();
            $col->foreignId('order_id')->constrained()->onDelete('cascade');
            $col->foreignId('product_id')->constrained()->onDelete('cascade');
            $col->integer('quantity');
            $col->decimal('price', 12, 2);
            $col->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
