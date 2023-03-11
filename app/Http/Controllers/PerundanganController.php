<?php

namespace App\Http\Controllers;

use App\Http\Requests\Perundangan\StorePerundanganRequest;
use App\Http\Requests\Perundangan\UpdatePerundanganRequest;
use App\Models\Perundangan;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables as DataTable;

class PerundanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $pabriks = Perundangan::query();
            return DataTable::of($pabriks)
                ->addIndexColumn()
                ->addColumn('download', function($row){
                    $btn = '<a href="'.asset('storage/'.$row->file).'" >Download </a>';
                    return $btn;
                })
                ->rawColumns(['download'])
                ->make();
        }
        return view('perundangan.public.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Perundangan\StorePerundanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerundanganRequest $request)
    {
        $input = $request->except('file');
        $fileName = uniqid() . '-' . $request->file->getClientOriginalName();
        if (!$request->file->storeAs("public/perundangan", $fileName)) {
            return redirect()->back()->with('error', 'Gagal menambah data perundangan');
        }
        $input['file'] = "perundangan/$fileName";
        Perundangan::create($input);
        return redirect()->back()->with('success', 'Berhasil menambah data perundangan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Perundangan\UpdatePerundanganRequest  $request
     * @param  app\Models\Perundangan  $perundangan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerundanganRequest $request, Perundangan $perundangan)
    {
        $input = $request->except('file');
        if($request->has('file')){
            $fileName = uniqid() . '-' . $request->file->getClientOriginalName();
            if (!$request->file->storeAs("public/perundangan", $fileName)) {
                return redirect()->back()->with('error', 'Gagal mengubah data perundangan');
            }
            $input['file'] = "perundangan/$fileName";
            if ($perundangan->file !== null && is_file($perundangan->file)) Storage::delete('public/' . $perundangan->file);
        }
        $perundangan->update($input);
        return redirect()->back()->with('success', 'Berhasil mengubah data perundangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perundangan $perundangan)
    {
        if ($perundangan->file !== null && is_file('storage/'.$perundangan->file)) Storage::delete('public/' . $perundangan->file);
        $perundangan->delete();
        return response('', 204);
    }

    public function admin()
    {
        $perundangans = Perundangan::select('id', 'nama', 'file')->get();
        return view('perundangan.admin.index', compact('perundangans'));
    }
}
