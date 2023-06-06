<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use App\Models\NilaiFasilitas;
use Illuminate\Http\Request;

class NilaiFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaifasilitas = NilaiFasilitas::join('tb_maskapai', 'tb_maskapai.id_maskapai', 'tb_nilaifasilitas.id_maskapai')
            ->select('tb_nilaifasilitas.*', 'tb_maskapai.*')
            ->paginate(10);
        return view('nilaiFasilitas.nilaifasilitas', compact('nilaifasilitas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['maskapai'] = Maskapai::all();
        return view('nilaiFasilitas/tambah-nilaifasilitas', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'nilai_KriteriaFasilitas' => 'required',
        ]);

        NilaiFasilitas::create([
            'id_fasilitas' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'nilai_KriteriaFasilitas'  => $request->nilai_KriteriaFasilitas,
        ]);
        return redirect("nilaifasilitas")->with("message", "Data berhasil disimpan");
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
    public function edit(NilaiFasilitas $nilaifasilitas)
    {
        $data["id_fasilitas"] = NilaiFasilitas::find($nilaifasilitas->id_kualitas);
        $data["id_maskapai"] = Maskapai::find($nilaifasilitas->id_maskapai);
        $data["nilai_KriteriaFasilitas"] = NilaiFasilitas::all();
        return view('nilaiFasilitas.edit-nilaifasilitas', compact('nilaifasilitas'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,NilaiFasilitas $nilaifasilitas)
    {
        $request->validate([
            'nilai_KriteriaFasilitas' => 'required',
        ]);

        $nilaifasilitas->update([
            'id_maskapai' => $request->id_maskapai,
            'nilai_KriteriaFasilitas'  => $request->nilai_KriteriaFasilitas,
        ]);
        return redirect("nilaifasilitas")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiFasilitas $nilaifasilitas)
    {
        $nilaifasilitas->delete();
        return redirect ("nilaifasilitas");
    }
}
