<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    // Validasi dulu
    $request->validate([
        'nama' => 'required|max:10',
        'email' => ['required', 'email'],
        'pertanyaan' => 'required|max:300|min:8',
    ],[
        'nama.required' => 'Nama tidak boleh kosong',
        'email.email' => 'Email tidak valid',
    ]);

    // Ambil data setelah validasi berhasil
    $data['nama'] = $request->nama;
    $data['email'] = $request->email;
    $data['pertanyaan'] = $request->pertanyaan;

    // Kirim data ke view
    // return view('home-question-respon', $data);
    // return redirect()->route(route:'matakuliah');
    // return redirect()->back();
    // return redirect()->away('https://pcr.ac.id/');
    return redirect()->route('home')->with('info', 'Selamat, Berhasil Dikirim!');
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
