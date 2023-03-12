<?php

namespace App\Http\Controllers\Perkebunan\Lokasi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\LokasiRequest;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class LokasiPabrikController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * 
     * @param  app\Http\Requests\Perkebunan\LokasiRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(LokasiRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->lokasi_pabriks()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data lokasi pabrik');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\LokasiRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LokasiRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->lokasi_pabriks()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data lokasi pabrik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $namna
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->lokasi_pabriks()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data lokasi kebun');
    }
}
