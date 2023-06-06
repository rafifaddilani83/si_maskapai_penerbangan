<?php

namespace App\Http\Controllers;

use App\Models\user1;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class user1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['user1'] = user1::all();
        return view('user1.user1', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user1.tambah-user1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        user1::create([
            'id_user' => rand(),
            'username'  => $request->username,
            'email'  => $request->email,
            'password' => $request->password,
        ]);
        return redirect("user1")->with("message", "Data berhasil disimpan");
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
    public function edit(user1 $user1)
    {
        return view('user1/edit-user1', compact('user1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,user1 $user1)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user1->update([
            'username'  => $request->username,
            'email'  => $request->username,
            'password' => $request->password,
        ]);
        return redirect("user1")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user1 $user1)
    {
        $user1->delete();
        return redirect ("user1");
    }
    public function print()
    {
        $user1 = user1::get();
        $pdf = Pdf::loadview('user1\laporan-user1', ['user1' => $user1])->setPaper('a4');
        return $pdf->download('laporan-user1.pdf');
    }
}
