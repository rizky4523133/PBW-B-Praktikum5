<?php

namespace App\Http\Controllers;

use App\Models\PesanTamu;
use Illuminate\Http\Request;

class PesanTamuController extends Controller
{
    public function index()
    {
        $daftar_pesan = PesanTamu::latest()->get();
        return view('bukutamu.index', ['daftar_pesan' => $daftar_pesan]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        PesanTamu::create($validated);
        return redirect('/bukutamu')->with('success', 'Pesan Anda telah terkirim!');
    }

    // public function create()
    // {
    //     return view('buku-tamu.create');
    // }
}
