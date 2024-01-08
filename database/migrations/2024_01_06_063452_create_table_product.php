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
        Schema::create('table_product', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk');
            $table->string('deskripsi_produk');
            $table->integer('stok');
            $table->unsignedBigInteger('harga');
            $table->string('gambar_produk');
            // $table->enum('ukuran', ['S', 'M', 'XL', 'XXL']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_product');
    }
};
