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
        $pabriks = Pabrik::where('id', $id);
        return view('pabrik.public.show', compact('pabriks'));
    }

    public function dtRencana(){
        $pabrikRencana = Kontribusi::where('pabrik_id', 12)->where('kategori','pabrik')->where('pelaksanaan','rencana');
        return DataTable::of($pabrikRencana)
            ->addIndexColumn()
            ->make();
    }

    public function dtRealisasi(){
        $pabrikRealisasi = Kontribusi::where('pabrik_id', 12)->where('kategori','pabrik')->where('pelaksanaan','realisasi');
        return DataTable::of($pabrikRealisasi)
            ->addIndexColumn()
            ->make();  
    }

    public function dtProduksi(){
        $produksi = Produksi::where('pabrik_id', 1);
        return DataTable::of($produksi)
            ->addIndexColumn()
            ->make();  
    }
    
    public function dtSupply(){
        $supplier = Supplier::where('pabrik_id', 12);
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
