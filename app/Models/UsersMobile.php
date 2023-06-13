<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class UsersMobile extends Model
{
    protected $table = "users_mobile";
    protected $primaryKey = "id";
    protected $guarded = [
        'id'	
    ];
    protected $fillalable = [
        '*'
    ];

    use HasFactory;
    use HasApiTokens;
public function pesanan()
    {
    return $this->hasMany(pesanan::class);
    }
    //use HasFactory;
}
