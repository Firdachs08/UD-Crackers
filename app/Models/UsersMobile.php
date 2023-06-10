<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersMobile extends Model
{
    protected $table = "users_mobile";
    protected $primaryKey = "id";
    protected $guarded = [
        'id'	
    ];
    //use HasFactory;
public function pesanan()
    {
    return $this->hasMany(pesanan::class);
    }
    //use HasFactory;
}
