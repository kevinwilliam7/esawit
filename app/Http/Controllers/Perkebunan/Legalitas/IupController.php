<?php

namespace App\Http\Controllers\Perkebunan\Legalitas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\Legalitas\IupRequest;
use App\Models\Perkebunan\Perkebunan;

class IupController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\IupRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(IupRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->iups()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data izin usaha perkebunan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\IupRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IupRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->iups()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data izin usaha perkebunan');
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
        $perkebunan->iups()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data izin usaha perkebunan');
    }
}
