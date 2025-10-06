<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['username'] = 'Heroku';
        $data ['last_login'] = date('Y-m-d H:i:s');
        $data ['list_pendidikan'] = ['SD','SMP','SMA','S1','S2','S3'];
        return view ('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request){
        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['pertanyaan'] = $request->pertamyaan;

		$request->validate([
		    'nama'  => 'required|max:10',
		    'email' => ['required','email'],
		    'pertanyaan' => 'required|max:300|min:8',
		]);
        return view('home-requestion-respon', $data);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

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
