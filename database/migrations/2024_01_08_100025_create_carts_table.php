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
        Schema::create('carts', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->string('nama_produk');
            $table->string('deskripsi_produk');
            $table->unsignedBigInteger('harga');
            $table->string('gambar_produk');
            $table->timestamps();
            $table->foreign('user_id')->references('id_produk')->on('products')->onDelete('cascade');
            $table->foreign('product_id')->references('id_produk')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};