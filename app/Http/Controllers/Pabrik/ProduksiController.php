<?php

namespace App\Http\Controllers\Pabrik;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pabrik\ProduksiRequest;
use App\Models\Pabrik\Pabrik;

class ProduksiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param app\Http\Requests\Pabrik\ProduksiRequest  $request
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @return \Illuminate\Http\Response
     */
    public function store(ProduksiRequest $request, Pabrik $pabrik)
    {
        $pabrik->produksis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data produksi');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param app\Http\Requests\Pabrik\ProduksiRequest  $request
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProduksiRequest $request, Pabrik $pabrik, $nama, $id)
    {
        $pabrik->produksis()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data produksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pabrik $pabrik, string $nama, int $id)
    {
        $pabrik->produksis()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data produksi');
    }
}
