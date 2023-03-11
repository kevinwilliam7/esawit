<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tbs\TbsRequest;
use App\Models\Tbs;
use Illuminate\Http\Request;

class TbsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbs = Tbs::orderBy('created_at', 'desc')->take(3)->get();
        return view('tbs.public.index', compact('tbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tbs.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  app\Http\Requests\Tbs\TbsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TbsRequest $request)
    {
        Tbs::create($request->all());
        return redirect()->route('admin.tbs.index')->with('success', 'Berhasil menambah data harga TBS');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  app\Models\Tbs  $tb
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbs $tb)
    {
        return view('tbs.admin.edit', compact('tb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  app\Http\Requests\Tbs\TbsRequest  $request
     * @param  app\Models\Tbs  $tb
     * @return \Illuminate\Http\Response
     */
    public function update(TbsRequest $request, Tbs $tb)
    {
        $tb->update($request->all());
        return redirect()->route('admin.tbs.index')->with('success', 'Berhasil mengubah data harga TBS');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  app\Models\Tbs  $tb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbs $tb)
    {
        $tb->delete();
        return response('', 204);
    }

    public function admin()
    {
        $tbs = Tbs::get();
        return view('tbs.admin.index', compact('tbs'));
    }
}
