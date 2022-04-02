<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusan;

class jurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = jurusan::all();
        return view('master.jurusan.mjurusan', [
            'jurusan' => $jurusan,
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
        return view('master.jurusan.create');
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
                'nama' => 'required'
            ],
            [
                'nama.required' => 'nama Tidak Boleh kosong'
            ]
        );

        $jurusan = new jurusan;
        $jurusan->nama = $request->nama;
        $jurusan->save();
        return redirect('/admin/mjurusan');
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
        $jurusan = jurusan::where('id', $id)->first();
        return view('master.jurusan.edit', [
            'jurusan' => $jurusan,
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
                'nama' => 'required'
            ],
            [
                'nama.required' => 'nama Tidak Boleh kosong'
            ]
        );
        jurusan::where('id', $id)->update([
            'nama' => $request->nama
        ]);
        return redirect('/admin/mjurusan');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jurusan::where('id', $id)->delete();
        return redirect('/admin/mjurusan');
    }
}
