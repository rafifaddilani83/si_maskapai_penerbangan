<?php

namespace App\Http\Controllers;

use App\Models\BobotNilai;
use App\Models\Maskapai;
use Illuminate\Http\Request;

class BobotNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bobotnilai = BobotNilai::join('tb_maskapai', 'tb_maskapai.id_maskapai', 'tb_bobotnilai.id_maskapai')
            ->select('tb_bobotnilai.*', 'tb_maskapai.*')
            ->paginate(10);
        return view('bobotnilai/bobotnilai', compact('bobotnilai'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['maskapai'] = Maskapai::all();
        return view('bobotnilai/tambah-bobotnilai', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_maskapai' => 'required',
            'bobot_NilaiFasilitas' => 'required',
            'bobot_NilaiHarga' => 'required',
            'bobot_NilaiPelayanan' => 'required',
            'bobot_NilaiKualitas' => 'required',
        ]);

        BobotNilai::create([
            'id_bobotNilai' => rand(),
            'id_maskapai'  => $request->id_maskapai,
            'bobot_NilaiFasilitas'  => $request->bobot_NilaiFasilitas,
            'bobot_NilaiHarga'  => $request->bobot_NilaiHarga,
            'bobot_NilaiPelayanan'  => $request->bobot_NilaiPelayanan,
            'bobot_NilaiKualitas'  => $request->bobot_NilaiKualitas,
        ]);
        return redirect("bobotnilai")->with("message", "Data berhasil disimpan");
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
    public function edit(BobotNilai $bobotnilai)
    {
        $data["id_bobotNilai"] = BobotNilai::find($bobotnilai->id_bobotNilai);
        $data["id_maskapai"] = Maskapai::find($bobotnilai->id_maskapai);
        $data["bobot_NilaiFasilitas"] = BobotNilai::all();
        $data["bobot_NilaiHarga"] = BobotNilai::all();
        $data["bobot_NilaiPelayanan"] = BobotNilai::all();
        $data["bobot_NilaiKualitas"] = BobotNilai::all();
        return view('bobotnilai/edit-bobotnilai', compact('bobotnilai'),$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BobotNilai $bobotnilai)
    {
        $request->validate([
            'bobot_NilaiFasilitas' => 'required',
            'bobot_NilaiHarga' => 'required',
            'bobot_NilaiPelayanan' => 'required',
            'bobot_NilaiKualitas' => 'required',
        ]);

        $bobotnilai->update([

            'bobot_NilaiFasilitas'  => $request->bobot_NilaiFasilitas,
            'bobot_NilaiHarga' => $request->bobot_NilaiHarga,
            'bobot_NilaiPelayanan' => $request->bobot_NilaiPelayanan,
            'bobot_NilaiKualitas' => $request->bobot_NilaiKualitas,
        ]);
        return redirect("bobotnilai")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BobotNilai $bobotnilai)
    {
        $bobotnilai->delete();
        return redirect ("bobotnilai");
    }
}
