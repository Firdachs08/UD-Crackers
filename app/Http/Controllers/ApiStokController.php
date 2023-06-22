<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stok;

class ApiStokController extends Controller
{
    public function all(){
        $stok = stok::orderByDesc('id')->get();

        return response()->json([
            'message' => 'success',
            'data' => $stok
        ]
        );
}
}
