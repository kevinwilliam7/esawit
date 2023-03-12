<?php

namespace App\Http\Controllers;

use App\Http\Requests\Partner\StorePartnerRequest;
use App\Http\Requests\Partner\UpdatePartnerRequest;
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Partner\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnerRequest $request)
    {
        $input = $request->except('image', '_token', '_method');
        $filename = 'partner/'.date('dmyhis').$request->name.'.'.$request->image->getClientOriginalExtension();
        $request->image->storeAs('public', $filename);
        $input['image'] = $filename;
        Partner::create($input);
        return redirect()->back()->with('success', 'Berhasil menambah data partner');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Partner\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
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
