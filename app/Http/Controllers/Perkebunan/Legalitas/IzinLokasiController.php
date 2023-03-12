<?php

namespace App\Http\Controllers\Perkebunan\Legalitas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\Legalitas\IzinLokasiRequest;
use App\Models\Perkebunan\Perkebunan;

class IzinLokasiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\IzinLokasiRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(IzinLokasiRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->izin_lokasis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data izin lokasi');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\IzinLokasiRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IzinLokasiRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->izin_lokasis()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data izin lokasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->izin_lokasis()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data izin lokasi');
    }
}
