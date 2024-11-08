<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fashionmales', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('produk');
            $table->longText('description');
            $table->integer('jumlah');
            $table->string('harga');
            $table->string('link');
            $table->binary('pic',length:16, fixed: true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fashionmales');
    }
};
