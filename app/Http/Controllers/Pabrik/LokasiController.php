<?php

namespace App\Http\Controllers\Pabrik;

use App\Http\Controllers\Controller;
use App\Models\Pabrik\Pabrik;
use Illuminate\Http\Request;

class LokasiController extends Controller
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
    public function store(Request $request, Pabrik $pabrik)
    {
        $pabrik->lokasis()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah lokasi');
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
        $pabrik->lokasis()->where('id', $id)->firstOrFail()->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah lokasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pabrik $pabrik, string $nama, int $id)
    {
        $pabrik->lokasis()->where('id', $id)->firstOrFail()->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus lokasi');
    }
}
