<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $table = "pesanan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_produk',  'nama', 'no_hp', 'jumlah_pesanan', 'total_harga', 'status_bayar'	
    ];
    //use HasFactory;
public function stok()
    {
    return $this->belongsTo(stok::class);
    }

public function UsersMobile()
{
    return $this->belongsTo(UsersMobile::class);
}
}
