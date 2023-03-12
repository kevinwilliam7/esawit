<?php

namespace App\Http\Controllers\Perkebunan\Legalitas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\Legalitas\IblhRequest;
use App\Models\Perkebunan\Perkebunan;

class IblhController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\IblhRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(IblhRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->iblhs()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data izin bidang lingkungan hidup');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\Legalitas\IblhRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IblhRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->iblhs()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data izin bidang lingkungan hidup');
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
        $perkebunan->iblhs()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data izin bidang lingkungan hidup');
    }
}
