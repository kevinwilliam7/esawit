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
        $pabrikRencana = Kontribusi::with('desa', 'desa.kecamatan', 'parent')->where('kategori_type', 'LIKE', '%pabrik%')->where('pelaksanaan','rencana');
        return DataTable::of($pabrikRencana)
            ->addIndexColumn()
            ->make();
    }

    public function dtPabrikRealisasi(){
        $pabrikRealisasi = Kontribusi::with('desa', 'desa.kecamatan', 'parent')->where('kategori_type', 'LIKE', '%pabrik%')->where('pelaksanaan','realisasi');
        return DataTable::of($pabrikRealisasi)
            ->addIndexColumn()
            ->make();   
    }

    public function dtPerkebunanRencana(){
        $perkebunanRencana  = Kontribusi::with('desa', 'desa.kecamatan', 'parent')->where('kategori_type', 'LIKE', '%perkebunan%')->where('pelaksanaan','rencana');
        return DataTable::of($perkebunanRencana)
            ->addIndexColumn()
            ->make();
    }

    public function dtPerkebunanRealisasi(){
        $perkebunanRealisasi = Kontribusi::with('desa', 'desa.kecamatan', 'parent')->where('kategori_type', 'LIKE','%perkebunan%')->where('pelaksanaan','realisasi');
        return DataTable::of($perkebunanRealisasi)
            ->addIndexColumn()
            ->make();
    }
    
    public function admin()
    {
        return view('kontribusi.admin.index');
    }
}
