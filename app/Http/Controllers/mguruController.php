<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;

class mguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::all();

        return view('admin.master.mguru', [
            'guru' => $guru,
            'num' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.master.mguru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $gurum = new guru;
        $gurum->nama_guru = $request->nama_guru;
        $gurum->nip = $request->nip;
        $gurum->jenis_kelamin = $request->jenis_kelamin;
        $gurum->tempat_lahir = $request->tempat_lahir;
        $gurum->tanggal_lahir = $request->tanggal_lahir;
        $gurum->gol = $request->gol;
        $gurum->save();
        $gurum = guru::all();
        return view('admin.master.mguru', [
            'guru' => $gurum,
            'num' => 1
        ]);
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
}
