<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use App\Models\NilaiHarga;
use Illuminate\Http\Request;

class NilaiHargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaiharga = NilaiHarga::join('tb_maskapai', 'tb_maskapai.id_maskapai', 'tb_nilaiharga.id_maskapai')
        ->select('tb_nilaiharga.*', 'tb_maskapai.*')
        ->paginate(10);
    return view('nilaiHarga.nilaiHarga', compact('nilaiharga'))->with('i', (request()->input('page', 1) - 1) * 5);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['maskapai'] = Maskapai::all();
        return view('nilaiHarga.tambah-nilaiharga', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'nilai_KriteriaHarga' => 'required',
        ]);

        NilaiHarga::create([
            'id_harga' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'nilai_KriteriaHarga'  => $request->nilai_KriteriaHarga,
        ]);
        return redirect("nilaiharga")->with("message", "Data berhasil disimpan");
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
    public function edit(NilaiHarga $nilaiharga)
    {
        $data["id_harga"] = NilaiHarga::find($nilaiharga->id_harga);
        $data["id_maskapai"] = Maskapai::find($nilaiharga->id_maskapai);
        $data["nilai_KriteriaHarga"] = NilaiHarga::all();
        return view('nilaiHarga.edit-nilaiharga', compact('nilaiharga'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,NilaiHarga $nilaiharga)
    {
        $request->validate([
            'nilai_KriteriaHarga' => 'required',
        ]);

        $nilaiharga->update([
            'id_maskapai' => $request->id_maskapai,
            'nilai_KriteriaHarga'  => $request->nilai_KriteriaHarga,
        ]);
        return redirect("nilaiharga")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiHarga $nilaiharga)
    {
        $nilaiharga->delete();
        return redirect ("nilaiharga");
    }
}
