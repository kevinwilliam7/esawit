<?php

namespace App\Http\Controllers\Perkebunan\Penanaman;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\PenanamanRequest;
use App\Models\Perkebunan\Perkebunan;

class PenanamanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PenanamanRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(PenanamanRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->penanamans()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data penanaman');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PenanamanRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PenanamanRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->penanamans()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data penanaman');
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
        $perkebunan->penanamans()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data penanaman');
    }
}
