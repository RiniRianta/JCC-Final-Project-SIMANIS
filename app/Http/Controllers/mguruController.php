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
        $hitung = guru::get()->count();
        return view('master.guru.mguru', [
            'guru' => $guru,
            'num' => 1,
            'hitung' => $hitung
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
        // guru::create($request->all());
        $gurum = new guru;
        $gurum->nama_guru = $request->nama_guru;
        $gurum->nip = $request->nip;
        $gurum->jenis_kelamin = $request->jenis_kelamin;
        $gurum->tempat_lahir = $request->tempat_lahir;
        $gurum->tanggal_lahir = $request->tanggal_lahir;
        $gurum->gol = $request->gol;
        $gurum->save();
        $gurum = guru::all();
        return redirect('/mguru')->with('success', 'Show is successfully saved');
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
        guru::where('id', $id)->update(
            [
                'nama_guru' => $request->nama_guru,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nip' => $request->nip,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'gol' => $request->gol
            ]
        );
        return redirect('/mguru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        guru::where('id', $id)->delete();

        return redirect('/mguru')->with('success','Post deleted successfully');
    }
}
