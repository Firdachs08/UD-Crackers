<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesanan;

class ApiPesananController extends Controller
{
    public function insert(Request $request)
    {
        $user = $request->user();
        $id_user = $user->id;

        $request->validate([
            'jumlah_pesanan' => 'required',
            'id_produk' => 'required',
            'total_harga' => 'required'
        ]);

        $pesanan = pesanan::create([
            'id_users_mobile' => $id_user,
            'id_produk' => $request->id_produk,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'total_harga' => $request->total_harga,
            'status_bayar' => 'belum lunas'
        ]);

        return response()->json([
            'message' => 'success',
            'data' => $pesanan,
        ], 200);
    }
    public function show(Request $request){
        $user = $request->user();
        $id_user = $user->id;

        $riwayat = pesanan::with(['stok', 'users'])->whereHas('users', function ($query) use ($id_user) {
            $query->where('id_users_mobile', $id_user);
        })
        ->orderByDesc('id')
        ->get();

        return response()->json([
            'message' => 'success',
            'data' => $riwayat,
        ], 200);
    }
}
