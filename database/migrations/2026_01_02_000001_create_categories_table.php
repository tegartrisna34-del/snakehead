<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $col) {
            $col->id();
            $col->string('name');
            $col->string('slug')->unique();
            $col->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
