<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carts extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'nama_produk',
        'deskripsi_produk',
        'harga',
        'gambar_produk',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_produk');
    }
}
