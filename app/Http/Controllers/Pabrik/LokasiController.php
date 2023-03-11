<?php

namespace App\Http\Controllers\Pabrik;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pabrik\LokasiRequest;
use App\Models\Pabrik\Pabrik;

class LokasiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Pabrik\LokasiRequest  $request
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @return \Illuminate\Http\Response
     */
    public function store(LokasiRequest $request, Pabrik $pabrik)
    {
        $pabrik->lokasis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah lokasi');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Pabrik\LokasiRequest  $request
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LokasiRequest $request, Pabrik $pabrik, string $nama, int $id)
    {
        $pabrik->lokasis()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah lokasi');
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
        $pabrik->lokasis()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus lokasi');
    }
}
