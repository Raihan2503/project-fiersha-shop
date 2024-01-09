<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public function carts(): HasMany
    {
        return $this->hasMany(Carts::class, 'product_id');
    }

    public function user(): HasMany{
        return $this->hasMany(User::class, 'id');
    }
}
