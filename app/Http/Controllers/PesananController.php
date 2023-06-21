<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
use Illuminate\Http\Request;
use App\Models\UsersMobile;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datapes = pesanan::with('users')->get();
        $users = UsersMobile::all();
        return view('Pesanan.dash-pesanan', [
            'datapes' => $datapes,
            'user' => $users
        ]);
     
        //
    }

    public function cetakPesanan()
    {
        $datapes = pesanan::all();
        return view('Pesanan.cetak-pesanan', compact('datapes'));
            // Lakukan operasi yang diinginkan pada $relatedUsers
            // dd($relatedUsers);
           // return view('dashboard', compact('totalpesanan', 'totalproduk', 'lunas', 'belum_lunas', 'datapes', 'relatedUsers'));
        
       // $datapes = pesanan::with('users')->get();
       // $users = UsersMobile::all();
        //$datapes = pesanan::all();
        //return view('Pesanan.cetak-pesanan', compact('totalpesanan', 'totalproduk', 'lunas', 'belum_lunas', 'datapes', 'relatedUsers'));}
        //return view('Pesanan.cetak-pesanan', [
          //  'datapes' => $datapes,
            //'user' => $users
        //]);
       
        //
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pesanan = pesanan::find($id);
        $pesanan->update();

        $pesanan->status_bayar = 'lunas';
        $pesanan->save();
        return redirect('/dash-pesanan');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = pesanan::findOrFail($id);

        // Hapus data
        $pesanan->delete();
    
        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect('dash-pesanan');
    }
}
