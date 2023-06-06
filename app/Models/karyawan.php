<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = "karyawan";
    protected $primaryKey = "id_karyawan";
    protected $fillable = [
        'id_karyawan', 'nama_karyawan', 'alamat_karyawan', 'NoHP_karyawan'
    ];
    //use HasFactory;
}
