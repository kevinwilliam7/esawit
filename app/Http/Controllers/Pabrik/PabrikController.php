<?php

namespace App\Http\Controllers\Pabrik;

use DataTables;
use Illuminate\Http\Request;
use App\Models\Pabrik\Pabrik;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pabrik\PabrikRequest;

class PabrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pabriks = Pabrik::select('id', 'nama', 'npwp', 'nama_grup', 'kapasitas_produksi');
            return DataTables::of($pabriks)->addIndexColumn()->make();
        }
        return view('pabrik.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pabrik.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App/Http/Resources/Pabrik/PabrikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PabrikRequest $request)
    {
        Pabrik::create($request->all());
        return redirect()->route('admin.pabrik.index')->with('success', 'Berhasil menambah data');
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
     * @param  App\Models\Pabrik\Pabrik  $pabrik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pabrik $pabrik)
    {
        $pabrik->delete();
        return response('', 204);
    }
}
