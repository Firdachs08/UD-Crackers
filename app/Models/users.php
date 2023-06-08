<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'email', 'password', 'alamat', 'no_hp', 'email_verified_at', 'level'
    ];
    // use HasFactory;
}
