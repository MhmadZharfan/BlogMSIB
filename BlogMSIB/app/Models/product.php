<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Nama produk
        'category',    // Kategori produk
        'price',       // Harga produk
        'description', // Deskripsi produk
    ];
}
