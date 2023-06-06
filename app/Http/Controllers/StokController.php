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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
