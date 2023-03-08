<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::get();
        return view('umum.partner.index', compact('partners'));
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
        $input = $request->except('image', '_token', '_method');
        $filename = 'partner/'.date('dmyhis').$request->name.'.'.$request->image->getClientOriginalExtension();
        $request->image->storeAs('public', $filename);
        $input['image'] = $filename;
        Partner::create($input);
        return redirect()->back()->with('success', 'Berhasil menambah data partner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $input = $request->except('image', '_token', '_method');
        if ($request->has('image')) {
            $filename = 'partner/'.date('dmyhis').$request->name.'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('public', $filename);
            $input['image'] = $filename;
        }
        $partner->update($input);
        return redirect()->back()->with('success', 'Berhasil mengubah data partner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data partner');
    }
}
