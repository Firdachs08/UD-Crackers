<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakar = users::all();
        return view('Karyawan.dash-karyawan', compact('datakar'));
        return view('Karyawan.add-karyawan', compact('datakar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$dtkar = users::all()
        return view('Karyawan.add-karyawan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        users::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
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
            
            $editkar = users::findorfail($id);
            return view('Karyawan.dash-karyawan', compact('editkar'));
            return view('Karyawan.edit-karyawan', compact('editkar'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // DB::table('users')->where('id',$id)->delete();
       // return redirect('Karyawan.dash-karyawan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = users::findOrFail($id);

        // Hapus data
        $users->delete();
    
        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect('dash-karyawan');
        //return redirect('/users')->with('success', 'Data karyawan berhasil dihapus');
        //
        
    }
}
