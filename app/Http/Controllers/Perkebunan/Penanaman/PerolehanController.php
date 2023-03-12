<?php

namespace App\Http\Controllers\Perkebunan\Penanaman;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\PerolehanRequest;
use App\Models\Perkebunan\Perkebunan;

class PerolehanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PerolehanRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(PerolehanRequest $request, Perkebunan $perkebunan)
    {
        $perkebunan->perolehan_lahans()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data perolehan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perkebunan\PerolehanRequest  $request
     * @param  app\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerolehanRequest $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->perolehan_lahans()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data perolehan');
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
        $perkebunan->perolehan_lahans()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data perolehan');
    }
}
