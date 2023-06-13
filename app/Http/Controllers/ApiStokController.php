<?php

namespace App\Http\Controllers;

use App\Models\stok;
use Illuminate\Http\Request;

class ApiStokController extends Controller
{
    public function all(){
        $stok = stok::orderByDesc('id')->get();

        return response()->json([
            'message' => 'success',
            'data' => $stok
        ]);
    }
}
