<?php

namespace App\Http\Controllers;

use App\Models\Kontribusi;
use App\Models\Pabrik\Pabrik;
use App\Models\Partner;
use App\Models\Perkebunan\Perkebunan;
use App\Models\Setting;
use App\Models\Tbs;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countPerkebunan = Perkebunan::count();
        $countPabrik = Pabrik::count();
        $countKontribusi = Kontribusi::where('pelaksanaan', 'realisasi')->count();
        $setting = Setting::first();
        $partners = Partner::get();
        return view('home.public.index',compact('countKontribusi','countPerkebunan','countPabrik', 'setting', 'partners'));
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
        //
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

    public function admin()
    {
        $countPerkebunan = Perkebunan::count();
        $countPabrik = Pabrik::count();
        $countKontribusi = Kontribusi::where('pelaksanaan', 'realisasi')->count();
        $countUser = User::count();
        $tbs = Tbs::get();
        return view('home.admin.index',compact('countKontribusi','countPerkebunan','countPabrik', 'countUser', 'tbs'));
    }
}
