<?php

namespace App\Http\Controllers\Perkebunan\Produksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\ProduksiRequest;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\ProduksiRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(ProduksiRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->produksi_kebuns()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data produksi');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\ProduksiRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProduksiRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->produksi_kebuns()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data produksi');
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
        $perkebunan->produksi_kebuns()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data produksi');
    }
}
