<?php

namespace App\Http\Controllers\Perkebunan\Kemitraan;

use App\Http\Controllers\Controller;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class KoperasiController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Perkebunan $perkebunan)
    {
        $perkebunan->koperasis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data koperasi');
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
        $perkebunan->koperasis->find($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data koperasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->koperasis->find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data koperasi');
    }
}
