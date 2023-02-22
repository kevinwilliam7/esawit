<?php

namespace App\Http\Controllers\Perkebunan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perkebunan\StorePerkebunanRequest;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;

class PerkebunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perkebunans = Perkebunan::select('id', 'nama', 'npwp', 'alamat', 'pola_kemitraan')->get();
        return view('perkebunan.admin.index', compact('perkebunans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perkebunan.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  app/Http/Requests/Perkebunan/StorePerkebunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerkebunanRequest $request)
    {
        try {
            Perkebunan::create($request->all());
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
        return redirect()->route('admin.perkebunan.index')->with('success', 'Berhasil menambah data perkebunan');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app/Models/Perkebunan/Perkebunan  $perkebunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkebunan $perkebunan)
    {
        $perkebunan->delete();
        return response('', 204);
    }
}
