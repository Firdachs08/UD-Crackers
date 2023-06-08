<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table = "stok";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_users', 'nama_produk', 'harga_produk', 'jumlah_produk'
    ];
    //use HasFactory;
}
