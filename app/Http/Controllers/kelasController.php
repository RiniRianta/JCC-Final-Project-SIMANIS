<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusan;
use App\kelas;

class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = kelas::first();
        return view('master.kelas.mkelas', [
            'kelas' => kelas::all(),
            'key' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.kelas.create', [
            'jurusan' => jurusan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'nama' => 'required',
                'jurusan' => 'required'
            ],
            [
                'nama.required' => 'nama Tidak Boleh kosong',
                'jurusan.required' => 'jurusan tidak boleh kosong'
            ]
        );

        $kelas = new kelas;
        $kelas->kelas = $request->nama;
        $kelas->jurusan_id = $request->jurusan;
        $kelas->save();
        return redirect('/mkelas');
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
        return view('master.kelas.edit', [
            'jurusan' => jurusan::all(),
            'kelas' => kelas::where('id', $id)->first()
        ]);
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
        $request->validate(
            [
                'nama' => 'required',
                'jurusan' => 'required'
            ],
            [
                'nama.required' => 'nama Tidak Boleh kosong',
                'jurusan.required' => 'jurusan tidak boleh kosong'
            ]
        );
        $kelas = kelas::where('id', $id)->update([
            'kelas' => $request->nama,
            'jurusan_id' => $request->jurusan
        ]);
        return redirect('/mkelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kelas::where('id', $id)->delete();
        return redirect('/mkelas');
    }
}
