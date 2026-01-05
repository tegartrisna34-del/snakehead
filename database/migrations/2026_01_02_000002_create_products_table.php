<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $col) {
            $col->id();
            $col->foreignId('category_id')->constrained()->onDelete('cascade');
            $col->string('name');
            $col->string('slug')->unique();
            $col->text('description')->nullable();
            $col->decimal('price', 12, 2);
            $col->integer('stock')->default(0);
            $col->string('image')->nullable();
            $col->boolean('is_active')->default(true);
            $col->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
