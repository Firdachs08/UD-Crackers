<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table = "stok";
    protected $primaryKey = "id";
    protected $guarded = [
        'id'
    ];
    //use HasFactory;
    public function pesanan()
    {
    return $this->hasMany(pesanan::class);
    }
}
