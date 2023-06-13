<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $table = "pesanan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_produk','id_users', 'jumlah_pesanan', 'total_harga', 'status_bayar', 'id_users_mobile'
    ];
    //use HasFactory;
public function stok()
    {
    return $this->belongsTo(stok::class, 'id_produk', 'id');
    }
public function user()
    {
    return $this->belongsTo(users::class, 'id_users', 'id');
    }

public function UsersMobile()
{
    return $this->belongsTo(UsersMobile::class, 'id_users_mobile' , 'id');
}
}
