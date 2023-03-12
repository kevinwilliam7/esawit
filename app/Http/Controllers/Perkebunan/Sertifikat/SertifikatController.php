<?php

namespace App\Http\Controllers\Perkebunan\Sertifikat;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\SertifikatRequest;
use App\Models\Perkebunan\Perkebunan;

class SertifikatController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\SertifikatRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(SertifikatRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->sertifikats()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data sertifikat');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\SertifikatRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SertifikatRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->sertifikats()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data sertifikat');
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
        $perkebunan->sertifikats()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data sertifikat');
    }
}
