<?php

namespace App\Http\Controllers\Pabrik;

use DataTables;
use Illuminate\Http\Request;
use App\Models\Pabrik\Pabrik;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pabrik\StorePabrikRequest;
use App\Http\Requests\Pabrik\UpdatePabrikRequest;
use App\Models\Lokasi\Kabupaten;
use Illuminate\Support\Facades\Storage;

class PabrikController extends Controller
{
    public $files = [
        'amdal',
        'siup',
        'situ',
        'hgb',
        'imb_pabrik',
        'imb_perumahan',
        'ijin_gangguan',
        'ijin_limbah_cair',
        'ijin_radio',
        'land_aplikasi',
        'mesin_pabrik',
        'ijin_timbang',
        'dokumen_sertifikat'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kabupatens = Kabupaten::select('id', 'name')->get();
        if ($request->ajax()) {
            $pabriks = Pabrik::select('id', 'nama', 'npwp', 'nama_grup', 'kapasitas_produksi');
            return DataTables::of($pabriks)->addIndexColumn()->addColumn('action', function ($pabrik) {
                return $pabrik->id . '/' . $pabrik->nama;
            })->make();
        }
        return view('pabrik.admin.index', compact('kabupatens'));
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
     * @param  App/Http/Requests/Pabrik/StorePabrikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePabrikRequest $request)
    {
        $input = $request->all();
        foreach ($this->files as $file) {
            if ($request->has($file)) {
                $fileName = uniqid() . '-' . $request->{$file}->getClientOriginalName();
                if ($request->{$file}->storeAs("public/$file", $fileName)) $input[$file] = "$file/$fileName";
            }
        }
        Pabrik::create($input);
        return redirect()->route('admin.pabrik.index')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @return \Illuminate\Http\Response
     */
    public function show(Pabrik $pabrik)
    {
        $pabrik->load('produksis', 'suppliers', 'kontribusis', 'lokasis');
        $kabupatens = Kabupaten::select('id', 'name')->get();
        return view('pabrik.admin.show', compact('pabrik', 'kabupatens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pabrik $pabrik)
    {
        return view('pabrik.admin.edit', compact('pabrik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app/Http/Requests/Pabrik/UpdatePabrikRequest  $request
     * @param  app/Models/Pabrik/Pabrik  $pabrik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePabrikRequest $request, Pabrik $pabrik)
    {
        $input = $request->all();
        foreach ($this->files as $file) {
            if ($request->has($file)) {
                $fileName = uniqid() . '-' . $request->{$file}->getClientOriginalName();
                if ($request->{$file}->storeAs("public/$file", $fileName)) {
                    $input[$file] = "$file/$fileName";
                    if ($pabrik->{$file} !== null && is_file('storage/'.$pabrik->{$file})) Storage::delete('public/' . $pabrik->{$file});
                }
            }
        }
        $pabrik->update($input);
        return redirect()->route('admin.pabrik.index')->with('success', 'Berhasil mengubah data pabrik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Pabrik\Pabrik  $pabrik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pabrik $pabrik)
    {
        foreach ($this->files as $file) {
            if ($pabrik->{$file} !== null && is_file('storage/'.$pabrik->{$file})) Storage::delete('public/' . $pabrik->{$file});
        }
        $pabrik->delete();
        return response('', 204);
    }
}
