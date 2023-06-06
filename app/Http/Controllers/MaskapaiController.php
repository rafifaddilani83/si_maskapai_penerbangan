<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class MaskapaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['maskapai'] = Maskapai::all();
        return view('maskapai.maskapai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maskapai.tambah-maskapai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kode_maskapai' => 'required',
        ]);

        Maskapai::create([
            'id_maskapai' => rand(),
            'nama'  => $request->nama,
            'kode_maskapai' => $request->kode_maskapai,
        ]);
        return redirect("maskapai")->with("message", "Data berhasil disimpan");
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
    public function edit(Maskapai $maskapai)
    {
        return view('maskapai.edit-maskapai', compact('maskapai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maskapai $maskapai)
    {
        $request->validate([
            'nama' => 'required',
            'kode_maskapai' => 'required',
        ]);

        $maskapai->update([
            'nama'  => $request->nama,
            'kode_maskapai' => $request->kode_maskapai,
        ]);
        return redirect("maskapai")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maskapai $maskapai)
    {
        $maskapai->delete();
        return redirect ("maskapai");
    }

    public function print()
    {
        $maskapai = Maskapai::get();
        $pdf = Pdf::loadview('maskapai\laporan-maskapai', ['maskapai' => $maskapai])->setPaper('a4');
        return $pdf->download('laporan-maskapai.pdf');
    }
}
