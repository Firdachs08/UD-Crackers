<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'email', 'password', 'alamat', 'no_hp', 'level'
    ];
    //use HasFactory;
}
