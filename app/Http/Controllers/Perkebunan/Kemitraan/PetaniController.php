<?php

namespace App\Http\Controllers\Perkebunan\Kemitraan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\PetaniRequest;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PetaniRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(PetaniRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->petanis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data petani');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PetaniRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PetaniRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->petanis()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data petani');
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
        $perkebunan->petanis()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data petani');
    }
}
