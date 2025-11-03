<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataMahasiswa'] = Mahasiswa::all();
        return view('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());

        $data['nama'] = $request->nama;
        $data['nim'] = $request->nim;
        $data['email'] = $request->email;
        $data['jurusan'] = $request->jurusan;
        $data['alamat'] = $request->alamat;

        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->with('success', 'Penambahan Data Berhasil!');
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
        $data['dataMahasiswa'] = Mahasiswa::findOrFail($id);
        return view('views.css.style', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa_id = $id;
        $mahasiswa = Mahasiswa::findOrFail($mahasiswa_id);

        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->email = $request->email;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Mahasiswa::findOrFail($id);

        $pelanggan->delete();
        return redirect()->route('mahasiswa.index')->with('success','Penghapusan Data Berhasil!');
    }
}
