<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sop\StoreSopRequest;
use App\Http\Requests\Sop\UpdateSopRequest;
use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables as DataTable;

class SopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $sop = Sop::query();
            return DataTable::of($sop)
                ->addIndexColumn()
                ->addColumn('download', function ($row) {
                    $btn = '<a href="'.asset('storage/'.$row->file).'" >Download </a>';
                    return $btn;
                })
                ->rawColumns(['download'])
                ->make();
        }
        return view('sop.public.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $sops = Sop::select('id', 'jenis_izin', 'file', 'keterangan')->get();
        return view('sop.admin.index', compact('sops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Sop\StoreSopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSopRequest $request)
    {
        $input = $request->except('file');
        $fileName = uniqid() . '-' . $request->file->getClientOriginalName();
        if (!$request->file->storeAs("public/sop", $fileName)) {
            return redirect()->back()->with('error', 'Gagal menambah data SOP');
        }
        $input['file'] = "sop/$fileName";
        Sop::create($input);
        return redirect()->back()->with('success', 'Berhasil menambah data SOP');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Sop\UpdateSopRequest  $request
     * @param  app\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSopRequest $request, Sop $sop)
    {
        $input = $request->except('file');
        if($request->has('file')){
            $fileName = uniqid() . '-' . $request->file->getClientOriginalName();
            if (!$request->file->storeAs("public/sop", $fileName)) {
                return redirect()->back()->with('error', 'Gagal mengubah data SOP');
            }
            $input['file'] = "sop/$fileName";
            if ($sop->file !== null && is_file($sop->file)) Storage::delete('public/' . $sop->file);
        }
        $sop->update($input);
        return redirect()->back()->with('success', 'Berhasil mengubah data SOP');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sop $sop)
    {
        if ($sop->file !== null && is_file('storage/'.$sop->file)) Storage::delete('public/' . $sop->file);
        $sop->delete();
        return response('', 204);
    }
}
