<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class form extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function processForm(Request $request)
    {
        $data = [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jk' => $request->input('jk'),
            'prodi' => $request->input('prodi'),
            'alamat' => $request->input('alamat'),
        ];

        return view('form')->with('data', $data);
    }
} 