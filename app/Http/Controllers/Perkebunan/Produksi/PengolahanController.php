<?php

namespace App\Http\Controllers\Perkebunan\Produksi;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\PengolahanRequest;
use App\Models\Perkebunan\Perkebunan;

class PengolahanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PengolahanRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(PengolahanRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->distribusis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data pengolahan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PengolahanRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengolahanRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->distribusis()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data pengolahan');
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
        $perkebunan->distribusis()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data pengolahan');
    }
}
