<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table = "stok";
    protected $primaryKey = "id_produk";
    protected $fillable = [
        'id_produk', 'id_karyawan', 'nama_produk', 'harga_produk'
    ];
    //use HasFactory;
}
