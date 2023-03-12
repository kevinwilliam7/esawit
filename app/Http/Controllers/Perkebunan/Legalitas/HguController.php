<?php

namespace App\Http\Controllers\Perkebunan\Legalitas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\Legalitas\HguRequest;
use App\Models\Perkebunan\Perkebunan;

class HguController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\HguRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(HguRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->hgus()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data HGU');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\HguRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HguRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->hgus()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data HGU');
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
        $perkebunan->hgus()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data HGU');
    }
}
