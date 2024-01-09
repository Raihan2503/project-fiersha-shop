<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'nama_produk',
        'deskripsi_produk',
        'harga',
        'gambar_produk',
    ];

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'id_produk');
    }

    public function user(): BelongsToMany {
        return $this->belongsToMany(User::class, 'id');
    }
}
