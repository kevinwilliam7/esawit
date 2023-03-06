<?php

namespace App\Http\Controllers\Perkebunan\Kontribusi;

use App\Http\Controllers\Controller;
use App\Models\Kontribusi;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;
use DataTables;

class KontribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Perkebunan $perkebunan, string $nama, string $pelaksanaan)
    {
        $kontribusis = Kontribusi::with('desa', 'desa.kecamatan')->select('id', 'tahun', 'jenis_kegiatan', 'tanggal', 'nilai_setara', 'desa_id')->where('kategori_type', 'App\Models\Perkebunan\Perkebunan')
                                ->where('kategori_id', $perkebunan->id)
                                ->where('pelaksanaan', $pelaksanaan);
        return DataTables::of($kontribusis)->addIndexColumn()->make();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Perkebunan $perkebunan)
    {
        $perkebunan->kontribusis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data kontribusi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->kontribusis->find($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data kontribusi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->kontribusis->find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data kontribusi');
    }
}
