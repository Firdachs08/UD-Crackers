<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use App\Models\stok;
use App\Models\UsersMobile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datapes = pesanan::all();
        $totalpesanan = pesanan::count();
        $totalproduk = stok::count();
        $lunas = pesanan::where('status_bayar', 'lunas')->count();
        $belum_lunas = pesanan::where('status_bayar', 'belum lunas')->count();
        foreach ($datapes as $pesanan) {
            $relatedUsers = $pesanan->users;
            // Lakukan operasi yang diinginkan pada $relatedUsers
            // dd($relatedUsers);
            return view('dashboard', compact('totalpesanan', 'totalproduk', 'lunas', 'belum_lunas', 'datapes', 'relatedUsers'));
        }
        // $user = UsersMobile::find($datapes->id_users_mobile)->get();
        // dd($user);
       
       // return view('dashboard', compact('totalproduk'));
    }
    //
}


