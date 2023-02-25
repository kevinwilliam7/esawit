<?php

namespace App\Http\Controllers;

use App\Models\Perkebunan\Distribusi;
use App\Models\Perkebunan\Perkebunan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTable;

class PerkebunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $perkebunan = Perkebunan::select('id', 'nama_perkebunan', 'npwp', 'pola_kemitraan'); 
            return DataTable::of($perkebunan)
                ->addIndexColumn()
                ->addColumn('aksi', function($perkebunan){
                    $btn = '<a href="/perkebunan-detail/'.$perkebunan->id.'" class="btn btn-outline-success"><span class="bi-eye"></span> Lihat </a>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make();
        }
        return view('perkebunan.public.index');
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
        $perkebunans = Perkebunan::where('id',$id)->get();
        return view('perkebunan.public.show', compact('perkebunans'),);
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
