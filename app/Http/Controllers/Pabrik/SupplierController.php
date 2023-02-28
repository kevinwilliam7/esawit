<?php

namespace App\Http\Controllers\Pabrik;

use App\Http\Controllers\Controller;
use App\Models\Pabrik\Pabrik;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
        $pabrik->suppliers()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data supply');
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
        $pabrik->suppliers()->where('id', $id)->firstOrFail()->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data supply');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pabrik $pabrik, string $nama, int $id)
    {
        $pabrik->suppliers()->where('id', $id)->first()->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data produksi');
    }
}
