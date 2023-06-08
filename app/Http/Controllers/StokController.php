<?php

namespace App\Http\Controllers;
use App\Models\stok;
use Illuminate\Http\Request;


class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datastok = stok::all();
        return view('Stok.dash-stok', compact('datastok'));
        return view('Stok.add-stok', compact('datastok'));
        return view('Stok.edit-stok', compact('datastok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Stok.add-stok');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        stok::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'jumlah_produk' => $request->jumlah_produk,
        ]);
        return redirect('dash-stok');

        
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

        //stok::findOrFail($id)([
    //$edit = $request->input('jumlah');
    //'nama_produk' => $request->nama_produk,
      //      'harga_produk' => $request->harga_produk,
        //    'jumlah_produk' => $request->jumlah_produk,
        //]);
    //edit->updateStok($jumlah);

    //return redirect('dash-stok')->with('success', 'Stok berhasil diperbarui.');
    
    //return redirect()->back()->with('success', 'Stok berhasil diperbarui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         
}
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stok = stok::findOrFail($id);

        // Hapus data
        $stok->delete();
    
        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect('dash-stok');
    }
}
