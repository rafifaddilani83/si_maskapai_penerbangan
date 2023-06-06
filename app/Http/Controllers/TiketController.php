<?php

namespace App\Http\Controllers;

use App\Models\Pesawat;
use App\Models\tiket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiket = tiket::join('tb_pesawat', 'tb_pesawat.id_pesawat', 'tb_tiket.id_pesawat')
        ->select('tb_tiket.*', 'tb_pesawat.*')
        ->paginate(10);
    return view('tiket/tiket', compact('tiket'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pesawat'] = Pesawat::all();
        return view('tiket/tambah-tiket', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pesawat' => 'required',
            'tanggal_pesan' => 'required',
            'rute' => 'required',
            'harga' => 'required',
        ]);

        tiket::create([
            'id_tiket' => rand(),
            'id_pesawat'  => $request->id_pesawat,
            'tanggal_pesan' => $request->tanggal_pesan,
            'rute' => $request->rute,
            'harga' => $request->harga,
        ]);
        return redirect("tiket")->with("message", "Data berhasil disimpan");
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
    public function edit(tiket $tiket)
    {
        return view('tiket.edit-tiket', compact('tiket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,tiket $tiket)
        {
            $request->validate([
                'tanggal_pesan' => 'required',
                'rute' => 'required',
                'harga' => 'required',
            ]);

            $tiket->update([
                'id_pesawat' => $request->id_pesawat,
                'tanggal_pesan' => $request->tanggal_pesan,
                'rute' => $request->rute,
                'harga' => $request->harga,
            ]);
            return redirect("tiket")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tiket $tiket)
    {
        $tiket->delete();
        return redirect ("tiket");
    }
    public function print()
    {
        $tiket = tiket::get();
        $pdf = Pdf::loadview('tiket\laporan-tiket', ['tiket' => $tiket])->setPaper('a4');
        return $pdf->download('laporan-tiket.pdf');
    }
}
