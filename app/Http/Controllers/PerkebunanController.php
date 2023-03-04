<?php

namespace App\Http\Controllers;

use App\Models\Kontribusi;
use App\Models\Lokasi;
use App\Models\Perkebunan\Distribusi;
use App\Models\Perkebunan\Hgu;
use App\Models\Perkebunan\Iblh;
use App\Models\Perkebunan\Iup;
use App\Models\Perkebunan\IzinLokasi;
use App\Models\Perkebunan\Koperasi;
use App\Models\Perkebunan\LokasiPabrik;
use App\Models\Perkebunan\Penanaman;
use App\Models\Perkebunan\Perkebunan;
use App\Models\Perkebunan\PerolehanLahan;
use App\Models\Perkebunan\Petani;
use App\Models\Perkebunan\ProduksiKebun;
use App\Models\Perkebunan\Sertifikat;
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
            $perkebunan = Perkebunan::select('id', 'nama', 'npwp', 'pola_kemitraan'); 
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
        //umum
        $perkebunans = Perkebunan::where('id',$id)->get();
        $lokasiPerkebunans = Lokasi::where('kategori_id', $id)->where('kategori_type', 'perkebunan')->get();
        $lokasiPabriks = Lokasi::where('kategori_id', $id)->where('kategori_type', 'pabrik')->get();
        //legalitas
        $izinLokasis = IzinLokasi::where('perkebunan_id', $id)->get();
        $izinLokasiTotal = IzinLokasi::where('perkebunan_id', $id)->sum('luas');
        $iups = Iup::where('perkebunan_id', $id)->get();
        $iupTotal = $iups->sum('luas');
        $hgus = Hgu::where('perkebunan_id', $id)->get();
        $hguTotal = $hgus->sum('luas');
        $iblhs = Iblh::where('perkebunan_id', $id)->get();
        $iblhTotal = $iblhs->sum('luas');
        //penanaman
        $perolehanIntis =  PerolehanLahan::where('perkebunan_id', $id)->where('jenis_kebun', 'inti')->get();
        $perolehanPlasmas =  PerolehanLahan::where('perkebunan_id', $id)->where('jenis_kebun', 'plasma')->get();
        $perolehanIntiTotal = $perolehanIntis->sum('luas');
        $perolehanPlasmaTotal = $perolehanPlasmas->sum('lnilaiKuas');
        $penanamanIntis =  Penanaman::where('perkebunan_id', $id)->where('kategori', 'inti')->get();
        $penanamanPlasmas =  Penanaman::where('perkebunan_id', $id)->where('kategori', 'plasma')->get();
        $penanamanIntiTotal = $penanamanIntis->sum('luas');
        $penanamanPlasmaTotal = $penanamanPlasmas->sum('luas');
        //produksi
        $produksiBerjalans =ProduksiKebun::where('perkebunan_id', $id)->where('kondisi', 'berjalan')->get();
        $produksiKemarins  =ProduksiKebun::where('perkebunan_id', $id)->where('kondisi', 'kemarin')->get();
        $produksiBerjalanTotal = $produksiBerjalans->sum('jumlahproduksi');
        $produksiKemarinTotal = $produksiKemarins->sum('jumlahproduksi');
        $distribusis = Distribusi::where('perkebunan_id', $id)->get();
        $distribusiTotal = $distribusis->sum('jumlah_distribusi');
        //ketenagakerjaan
        //kemitraan
        $petanis = Petani::where('perkebunan_id', $id)->get();
        $kkPetaniTotal = $petanis->sum('jumlahkk');
        $luasPetaniTotal = $petanis->sum('luas');
        $koperasis = Koperasi::where('perkebunan_id', $id)->get();
        $anggotaKoperasiTotal = $koperasis->sum('jumlah_anggota');
        $luasKoperasiTotal = $koperasis->sum('luas');
        $kreditKoperasiTotal = $koperasis->sum('nilaikredit');
        $biayaKoperasiTotal = $koperasis->sum('standarbiaya');
        //csr
        //sertifikat
        return view('perkebunan.public.show', 
            compact('id', 'perkebunans', 'lokasiPerkebunans', 'lokasiPabriks', 'izinLokasis', 'izinLokasiTotal', 'iups', 'iupTotal', 'hgus', 'hguTotal', 'iblhs', 'iblhTotal', 'perolehanIntis', 'perolehanPlasmas', 'perolehanIntiTotal', 'perolehanPlasmaTotal', 'penanamanIntis', 'penanamanPlasmas', 'penanamanIntiTotal', 'penanamanPlasmaTotal', 'produksiBerjalans', 'produksiKemarins', 'produksiBerjalanTotal', 'produksiKemarinTotal', 'distribusis', 'distribusiTotal', 'petanis', 'kkPetaniTotal', 'luasPetaniTotal', 'koperasis', 'luasKoperasiTotal', 'kreditKoperasiTotal', 'biayaKoperasiTotal', 'anggotaKoperasiTotal'),
        );
    }

    
    public function dtRencana(Request $request){
        $rencana  = Kontribusi::with('desa')->where('kategori_id', $request->id)
            ->where('kategori_id', $request->id)->where('kategori_type', 'LIKE', '%perkebunan%')
            ->where('pelaksanaan','rencana');
        return DataTable::of($rencana)
            ->addIndexColumn()
            ->make();
    }

    public function dtRealisasi(Request $request){
        $realisasi = Kontribusi::with('desa')->where('kategori_id', $request->id)
            ->where('kategori_id', $request->id)->where('kategori_type', 'LIKE', '%perkebunan%')
            ->where('pelaksanaan','realisasi');
        return DataTable::of($realisasi)
            ->addIndexColumn()
            ->make();   
    }

    public function dtSertifikat(Request $request){
        $sertifikat = Sertifikat::where('perkebunan_id', $request->id);
        return DataTable::of($sertifikat)
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
