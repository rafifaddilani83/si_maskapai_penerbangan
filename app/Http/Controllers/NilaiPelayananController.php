<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use App\Models\NilaiHarga;
use App\Models\NilaiPelayanan;
use Illuminate\Http\Request;

class NilaiPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaipelayanan = NilaiPelayanan::join('tb_maskapai', 'tb_maskapai.id_maskapai', 'tb_nilaipelayanan.id_maskapai')
        ->select('tb_nilaipelayanan.*', 'tb_maskapai.*')
        ->paginate(10);
    return view('nilaiPelayanan.nilaipelayanan', compact('nilaipelayanan'))->with('i', (request()->input('page', 1) - 1) * 5);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['maskapai'] = Maskapai::all();
        return view('nilaiPelayanan.tambah-nilaipelayanan', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'nilai_KriteriaPelayanan' => 'required',
        ]);

        NilaiPelayanan::create([
            'id_pelayanan' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'nilai_KriteriaPelayanan'  => $request->nilai_KriteriaPelayanan,
        ]);
        return redirect("nilaipelayanan")->with("message", "Data berhasil disimpan");
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
    public function edit(NilaiPelayanan $nilaipelayanan)
    {
        $data["id_pelayanan"] = NilaiPelayanan::find($nilaipelayanan->id_harga);
        $data["id_maskapai"] = Maskapai::find($nilaipelayanan->id_maskapai);
        $data["nilai_KriteriaPelayanan"] = NilaiHarga::all();
        return view('nilaiPelayanan.edit-nilaipelayanan', compact('nilaipelayanan'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,NilaiPelayanan $nilaipelayanan)
    {
        $request->validate([
            'nilai_KriteriaPelayanan' => 'required',
        ]);

        $nilaipelayanan->update([
            'id_maskapai' => $request->id_maskapai,
            'nilai_KriteriaPelayanan'  => $request->nilai_KriteriaPelayanan,
        ]);
        return redirect("nilaipelayanan")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiPelayanan $nilaipelayanan)
    {
        $nilaipelayanan->delete();
        return redirect ("nilaipelayanan");
    }
}
