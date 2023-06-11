<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use App\Models\stok;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalpesanan = pesanan::count();
        $totalproduk = stok::count();
        $lunas = pesanan::where('status_bayar', 'lunas')->count();
        $belum_lunas = pesanan::where('status_bayar', 'belum lunas')->count();
        return view('dashboard', compact('totalpesanan', 'totalproduk', 'lunas', 'belum_lunas'));
       
       // return view('dashboard', compact('totalproduk'));
    }
    //
}


