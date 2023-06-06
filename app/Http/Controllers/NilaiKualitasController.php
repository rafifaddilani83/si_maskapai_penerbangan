<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use App\Models\NilaiKualitas;
use Illuminate\Http\Request;

class NilaiKualitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilaikualitas = NilaiKualitas::join('tb_maskapai', 'tb_maskapai.id_maskapai', 'tb_nilaikualitas.id_maskapai')
            ->select('tb_nilaikualitas.*', 'tb_maskapai.*')
            ->paginate(10);
        return view('nilaiKualitas.nilaikualitas', compact('nilaikualitas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['maskapai'] = Maskapai::all();
        return view('nilaiKualitas/tambah-nilaikualitas', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'nilai_KriteriaKualitas' => 'required',
        ]);

        NilaiKualitas::create([
            'id_kualitas' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'nilai_KriteriaKualitas'  => $request->nilai_KriteriaKualitas,
        ]);
        return redirect("nilaikualitas")->with("message", "Data berhasil disimpan");
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
    public function edit(NilaiKualitas $nilaikualitas)
    {
        $data["id_kualitas"] = NilaiKualitas::find($nilaikualitas->id_kualitas);
        $data["id_maskapai"] = Maskapai::find($nilaikualitas->id_maskapai);
        $data["nilai_KriteriaKualitas"] = NilaiKualitas::all();
        return view('nilaiKualitas.edit-nilaikualitas', compact('nilaikualitas'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,NilaiKualitas $nilaikualitas)
    {
        $request->validate([
            'nilai_KriteriaKualitas' => 'required',
        ]);

        $nilaikualitas->update([
            'id_maskapai' => $request->id_maskapai,
            'nilai_KriteriaKualitas'  => $request->nilai_KriteriaKualitas,
        ]);
        return redirect("nilaikualitas")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiKualitas $nilaikualitas)
    {
        $nilaikualitas->delete();
        return redirect ("nilaikualitas");
    }
}
