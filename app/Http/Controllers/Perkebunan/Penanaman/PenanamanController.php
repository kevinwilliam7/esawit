<?php

namespace App\Http\Controllers\Perkebunan\Penanaman;

use App\Http\Controllers\Controller;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class PenanamanController extends Controller
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
        $perkebunan->penanamans()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data penanaman');
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
        $perkebunan->penanamans->find($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data penanaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan, string $nama, int $id)
    {
        $perkebunan->penanamans->find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data penanaman');
    }
}
