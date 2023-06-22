<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use App\Models\stok;
use Illuminate\Http\Request;

class LaporanController extends Controller
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
            return view('laporan', compact('totalpesanan', 'totalproduk', 'lunas', 'belum_lunas', 'datapes', 'relatedUsers'));
        }
        // $user = UsersMobile::find($datapes->id_users_mobile)->get();
        // dd($user);
       
       // return view('dashboard', compact('totalproduk'));
    }
    public function cetakLaporan()
    {
    $datapes = pesanan::all();
    $totalpesanan = pesanan::count();
    $totalproduk = stok::count();
    $lunas = pesanan::where('status_bayar', 'lunas')->count();
    $belum_lunas = pesanan::where('status_bayar', 'belum lunas')->count();
    foreach ($datapes as $pesanan) {
        $relatedUsers = $pesanan->users;
        $p = $pesanan->stok;
        // dd($p);
        // Lakukan operasi yang diinginkan pada $relatedUsers
        // dd($relatedUsers);
        return view('Pesanan.cetak-pesanan', compact('totalpesanan', 'totalproduk', 'lunas', 'belum_lunas', 'datapes', 'relatedUsers', 'p'));
    }
    //{
        //$datapes = pesanan::all();
        //return view('Pesanan.cetak-pesanan', compact('datapes'));

        //
    }
    //
}
