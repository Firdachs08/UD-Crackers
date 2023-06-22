<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $table = "pesanan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_produk',  'id_users_mobile', 'jumlah_pesanan', 'total_harga', 'status_bayar'	
    ];
    //use HasFactory;
public function stok()
    {
    return $this->belongsTo(stok::class, 'id_produk', 'id');
    }

public function users()
{
    return $this->belongsTo(UsersMobile::class, 'id_users_mobile', 'id');
}
}
