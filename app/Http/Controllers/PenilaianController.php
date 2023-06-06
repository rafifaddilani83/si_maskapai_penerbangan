<?php

namespace App\Http\Controllers;

use App\Models\Maskapai;
use App\Models\NilaiFasilitas;
use App\Models\NilaiHarga;
use App\Models\NilaiKualitas;
use App\Models\NilaiPelayanan;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penilaian = Penilaian::join('tb_maskapai', 'tb_maskapai.id_maskapai', 'tb_penilaian.id_maskapai')
            ->select('tb_penialaian.*', 'tb_maskapai.*');
            $penilaian = Penilaian::join('tb_nilaifasilitas', 'tb_nilaifasilitas.id_fasilitas', 'tb_penilaian.id_fasilitas')
            ->select('tb_penialaian.*', 'tb_nilaifasilitas.*')
            ;
            $penilaian = Penilaian::join('tb_nilaiharga', 'tb_nilaiharga.id_harga', 'tb_penilaian.id_harga')
            ->select('tb_penialaian.*', 'tb_nilaiharga.*')
            ;
            $penilaian = Penilaian::join('tb_nilaipelayanan', 'tb_nilaipelayanan.id_pelayanan', 'tb_penilaian.id_pelayanan')
            ->select('tb_penialaian.*', 'tb_nilaipelayanan.*')
            ;
            $penilaian = Penilaian::join('tb_nilaikualitas', 'tb_nilaikualitas.id_kualitas', 'tb_penilaian.id_kualitas')
            ->select('tb_penialaian.*', 'tb_nilaikualitas.*')
            ;
        return view('penilaian/penilaian', compact('penilaian'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['maskapai'] = Maskapai::all();
        $data['fasilitas'] = NilaiFasilitas::all();
        $data['harga'] = NilaiHarga::all();
        $data['pelayanan'] = NilaiPelayanan::all();
        $data['kualitas'] = NilaiKualitas::all();
        return view('penilaian/tambah-penilaian', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'id_fasilitas' => 'required',
            'id_harga' => 'required',
            'id_pelayanan' => 'required',
            'id_kualitas' => 'required',
        ]);

        Penilaian::create([
            'id_penilaian' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'id_fasilitas'  => $request->id_fasilitas,
            'id_harga'  => $request->id_harga,
            'id_pelayanan'  => $request->id_pelayanan,
            'id_kualitas'  => $request->id_kualitas,
        ]);
        return redirect("penilaian")->with("message", "Data berhasil disimpan");
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
    public function edit(Penilaian $penilaian)
    {
        $data["id_penilaian"] = Penilaian::find($penilaian->id_bobotNilai);
        $data["id_maskapai"] = Maskapai::find($penilaian->id_maskapai);
        $data["id_fasilitas"] = Penilaian::find($penilaian->id_fasilitas);
        $data["id_harga"] = Penilaian::find($penilaian->id_harga);
        $data["id_pelayanan"] = Penilaian::find($penilaian->id_pelayanan);
        $data["id_kualitas"] = Penilaian::find($penilaian->id_kualitas);
        return view('penilaian/edit-penilaian', compact('penilaian'),$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'id_fasilitas' => 'required',
            'id_harga' => 'required',
            'id_pelayanan' => 'required',
            'id_kualitas' => 'required',
        ]);

        Penilaian::create([
            'id_penilaian' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'id_fasilitas'  => $request->id_fasilitas,
            'id_harga'  => $request->id_harga,
            'id_pelayanan'  => $request->id_pelayanan,
            'id_kualitas'  => $request->id_kualitas,
        ]);
        return redirect("penilaian")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penilaian $penilaian)
    {
        $penilaian->delete();
        return redirect ("penilaian");
    }
}
