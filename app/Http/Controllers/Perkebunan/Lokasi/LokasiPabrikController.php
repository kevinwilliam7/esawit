<?php

namespace App\Http\Controllers\Perkebunan\Lokasi;

use App\Http\Controllers\Controller;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class LokasiPabrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Perkebunan\Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Perkebunan $perkebunan)
    {
        $perkebunan->lokasi_pabriks()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data lokasi pabrik');
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
     * @param  App\Models\Perkebunan\Perkebunan  $perkebunan
     * @param  string nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->lokasi_pabriks->find($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data lokasi pabrik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Perkebunan\Perkebunan  $perkebunan
     * @param string  $namna
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->lokasi_pabriks->find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data lokasi kebun');
    }
}
