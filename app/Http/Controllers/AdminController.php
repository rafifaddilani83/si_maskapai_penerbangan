<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['admin'] = Admin::all();
        return view('admin.admin', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        Admin::create([
            'id_admin' => rand(),
            'username'  => $request->username,
            'password' => $request->password,
        ]);
        return redirect("admin")->with("message", "Data berhasil disimpan");
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
    public function edit(Admin $admin)
    {
        return view('admin/edit-admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Admin $admin)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin->update([
            'username'  => $request->username,
            'password' => $request->password,
        ]);
        return redirect("admin")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect ("admin");
    }
    public function print()
    {
        $admin = Admin::get();
        $pdf = Pdf::loadview('admin\laporan-admin', ['admin' => $admin])->setPaper('a4');
        return $pdf->download('laporan-admin.pdf');
    }
}
