<?php

namespace App\Http\Controllers\Pabrik;

use App\Http\Controllers\Controller;
use App\Models\Kontribusi;
use App\Models\Pabrik\Pabrik;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KontribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pabrik $pabrik, string $nama, string $pelaksanaan)
    {
        $kontribusis = Kontribusi::with('desa', 'desa.kecamatan')->select('id', 'tahun', 'jenis_kegiatan', 'tanggal', 'nilai_setara', 'desa_id')->where('kategori_type', 'App\Models\Pabrik\Pabrik')
                                ->where('kategori_id', $pabrik->id)
                                ->where('pelaksanaan', $pelaksanaan);
        return DataTables::of($kontribusis)->addIndexColumn()->addColumn('lokasi', function($kontribusi){
            return $kontribusi->desa->name.", ".$kontribusi->desa->kecamatan->name;
        })->make();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pabrik $pabrik)
    {
        $pabrik->kontribusis()->create($request->all());
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
    public function update(Request $request, Pabrik $pabrik, $nama, $id)
    {
        $pabrik->kontribusis()->where('id', $id)->firstOrFail()->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data kontribusi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pabrik $pabrik, string $nama, int $id)
    {
        $pabrik->kontribusis()->where('id', $id)->firstOrFail()->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data kontribusi');
    }
}
