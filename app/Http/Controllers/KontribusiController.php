<?php

namespace App\Http\Controllers;

use App\Models\Kontribusi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTable;

class KontribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kontribusi.public.index');
    }

    public function dtPabrikRencana(){
        $pabrikRencana = Kontribusi::where('kategori','pabrik')->where('pelaksanaan','rencana');
        return DataTable::of($pabrikRencana)
            ->addIndexColumn()
            ->make();
    }

    public function dtPabrikRealisasi(){
        $pabrikRealisasi = Kontribusi::where('kategori','pabrik')->where('pelaksanaan','realisasi');
        return DataTable::of($pabrikRealisasi)
            ->addIndexColumn()
            ->make();   
    }

    public function dtPerkebunanRencana(){
        $perkebunanRencana  = Kontribusi::where('kategori','perkebunan')->where('pelaksanaan','rencana');
        return DataTable::of($perkebunanRencana)
            ->addIndexColumn()
            ->make();
    }

    public function dtPerkebunanRealisasi(){
        $perkebunanRealisasi = Kontribusi::where('kategori','perkebunan')->where('pelaksanaan','realisasi');
        return DataTable::of($perkebunanRealisasi)
            ->addIndexColumn()
            ->make();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
