<?php

namespace App\Http\Controllers\Perkebunan\Kemitraan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\KoperasiRequest;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class KoperasiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Request\Perkebunan\KoperasiRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(KoperasiRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->koperasis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data koperasi');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Request\Perkebunan\KoperasiRequest  $request
     * @param  app\models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KoperasiRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->koperasis()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data koperasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->koperasis()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data koperasi');
    }
}
