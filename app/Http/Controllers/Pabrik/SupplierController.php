<?php

namespace App\Http\Controllers\Pabrik;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pabrik\SupplierRequest;
use App\Models\Pabrik\Pabrik;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Pabrik\SupplierRequest  $request
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request, Pabrik $pabrik)
    {
        $pabrik->suppliers()->create($request->all());
        return redirect()->back()->with('success', 'Berhasil menambah data supply');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Pabrik\SupplierRequest  $request
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierRequest $request, Pabrik $pabrik, string $nama, int $id)
    {
        $pabrik->suppliers()->findOrFail($id)->update($request->all());
        return redirect()->back()->with('success', 'Berhasil mengubah data supply');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\Pabrik\Pabrik  $pabrik
     * @param  string  $nama
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pabrik $pabrik, string $nama, int $id)
    {
        $pabrik->suppliers()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data produksi');
    }
}
