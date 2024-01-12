<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'cart_id',
        'nama_produk',
        'deskripsi_produk',
        'alamat',
        'nomor_telepon',
        'kuantitas',
        'harga',
        'total_harga',
        'status',
        'snap_token',
        'gambar_produk'
    ];

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'id_produk');
    }

    public function user(): BelongsToMany {
        return $this->belongsToMany(User::class, 'id');
    }
}
