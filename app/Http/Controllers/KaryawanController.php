<?php

namespace App\Http\Controllers;
use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakar = karyawan::all();
        return view('Karyawan.dash-karyawan', compact('datakar'));
        return view('Karyawan.add-karyawan', compact('datakar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Karyawan.add-karyawan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        karyawan::create([

            'nama_karyawan' => $request->nama_karyawan,
            'alamat_karyawan' => $request->alamat_karyawan,
            'NoHP_karyawan' => $request->NoHP_karyawan,
        ]);
        return redirect('dash-karyawan');
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
    public function edit($id)
    {
        {
            $editkar = karyawan::findorfail($id);
            return view('Karyawan.dash-karyawan', compact('editkar'));
            return view('Karyawan.edit-karyawan', compact('editkar'));
        }
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
