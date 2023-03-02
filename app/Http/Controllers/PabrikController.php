<?php

namespace App\Http\Controllers;

use App\Models\Kontribusi;
use App\Models\Pabrik\Pabrik;
use App\Models\Produksi;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTable;

class PabrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $pabriks = Pabrik::query();
            return DataTable::of($pabriks)
                ->addIndexColumn()
                ->addColumn('aksi', function($pabrik){
                    $btn = '<a href="/pabrik-detail/'.$pabrik->id.'" class="btn btn-outline-success"><span class="bi-eye"></span> Lihat </a>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make();
        }
        return view('pabrik.public.index');
        // $pabriks = Pabrik::get();
        // return view('pabrik.public.index',compact('pabriks'));
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
        $pabriks = Pabrik::findOrFail($id);
        return view('pabrik.public.show', compact('id', 'pabriks'));
    }

    public function dtRencana(Request $request){
        $rencana = Kontribusi::with('desa')->where('kategori_id', $request->id)->where('kategori_type','pabrik')->where('pelaksanaan','rencana');
        return DataTable::of($rencana)
            ->addIndexColumn()
            ->make();
    }

    public function dtRealisasi(Request $request){
        $realisasi = Kontribusi::with('desa')->where('kategori_id', $request->id)->where('kategori_type','pabrik')->where('pelaksanaan','realisasi');
        return DataTable::of($realisasi)
            ->addIndexColumn()
            ->make();  
    }

    public function dtProduksi(Request $request){
        $produksi = Produksi::where('pabrik_id', $request->id);
        return DataTable::of($produksi)
            ->addIndexColumn()
            ->make();  
    }
    
    public function dtSupply(Request $request){
        $supplier = Supplier::where('pabrik_id', $request->id);
        return DataTable::of($supplier)
            ->addIndexColumn()
            ->make();  
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
