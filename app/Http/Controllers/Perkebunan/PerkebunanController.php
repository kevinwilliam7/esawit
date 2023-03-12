<?php

namespace App\Http\Controllers\Perkebunan;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Perkebunan\Perkebunan;
use App\Http\Requests\Perkebunan\PerkebunanRequest;
use App\Models\Lokasi\Kabupaten;

class PerkebunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perkebunans = Perkebunan::select('id', 'nama', 'npwp', 'alamat', 'pola_kemitraan')->get();
        return view('perkebunan.admin.index', compact('perkebunans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perkebunan.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PerkebunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerkebunanRequest $request)
    {
        try {
            Perkebunan::create($request->all());
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('admin.perkebunan.index')->with('error', 'Gagal menambah data perkebunan');
        }
        return redirect()->route('admin.perkebunan.index')->with('success', 'Berhasil menambah data perkebunan');
    }

    /**
     * Display the specified resource.
     *
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function show(Perkebunan $perkebunan, String $nama)
    {
        $kabupatens = Kabupaten::get();
        $perkebunan->load('distribusis', 'kontribusis', 'lokasis', 'lokasi_pabriks', 'hgus', 'iups', 'iblhs', 'petanis', 'sertifikats', 'perolehan_lahans', 'penanamans', 'izin_lokasis', 'koperasis');
        return view('perkebunan.admin.show', compact('perkebunan', 'kabupatens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perkebunan $perkebunan, String $nama): View
    {
        return view('perkebunan.admin.edit', compact('perkebunan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PerkebunanRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function update(PerkebunanRequest $request, Perkebunan $perkebunan, String $nama)
    {
        $perkebunan->update($request->all());
        return redirect()->route('admin.perkebunan.index')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, String $nama)
    {
        $perkebunan->delete();
        return response('', 204);
    }
}
