<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use App\Models\Pesawat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesawat = Pesawat::join('tb_maskapai', 'tb_maskapai.id_maskapai', 'tb_pesawat.id_maskapai')
            ->select('tb_pesawat.*', 'tb_maskapai.*')
            ->paginate(10);
        return view('pesawat/pesawat', compact('pesawat'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['maskapai'] = Maskapai::all();
        return view('pesawat/tambah-pesawat', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'nama_pesawat' => 'required',
            'tanggal_pembuatan' => 'required',
            'tanggal_operasional' => 'required',
            'status' => 'required',
        ]);

        Pesawat::create([
            'id_pesawat' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'nama_pesawat'  => $request->nama_pesawat,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'tanggal_operasional' => $request->tanggal_operasional,
            'status' => $request->status,
        ]);
        return redirect("pesawat")->with("message", "Data berhasil disimpan");
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
    public function edit(Pesawat $pesawat)
    {
        $data["id_pesawat"] = Pesawat::find($pesawat->id_pesawat);
        $data["id_maskapai"] = Maskapai::find($pesawat->id_maskapai);
        $data["nama_pesawat"] = Pesawat::all();
        $data["tanggal_pembuatan"] = Pesawat::all();
        $data["tanggal_operasional"] = Pesawat::all();
        $data["status"] = Pesawat::all();
        return view('pesawat.edit-pesawat', compact('pesawat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Pesawat $pesawat)
    {
        $request->validate([
            'nama_pesawat' => 'required',
            'tanggal_pembuatan' => 'required',
            'tanggal_operasional' => 'required',
            'status' => 'required',
        ]);

        $pesawat->update([
            'nama_pesawat'  => $request->nama_pesawat,
            'tanggal_pembuatan' => $request->tanggal_pembuatan,
            'tanggal_operasional' => $request->tanggal_operasional,
            'status' => $request->status,
        ]);
        return redirect("pesawat")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesawat $pesawat)
    {
        $pesawat->delete();
        return redirect ("pesawat");
    }
    public function print()
    {
        $pesawat = Pesawat::get();
        $pdf = Pdf::loadview('pesawat\laporan-pesawat', ['pesawat' => $pesawat])->setPaper('a4');
        return $pdf->download('laporan-pesawat.pdf');
    }
}
