<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\kelas;


class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();

        return view('master.datasiswa.siswa', [
            'siswa' => $siswa,
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
        $kelas = kelas::all();
        return view('master.datasiswa.create', [
            'kelas' => $kelas
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
        $validasi = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required'
        ]);
        $siswa = new siswa;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->nisn = $request->nisn;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->kelas_id = $request->kelas;
        $siswa->save();
        $siswa = siswa::all();
        return view('master.datasiswa.siswa', [
            'key' => 1,
            'siswa' => $siswa
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
        $kelas = kelas::all();
        $siswa_id = siswa::where('id', $id)->first();;
        return view('master.datasiswa.edit', [
            'siswa' => $siswa_id,
            'kelas' => $kelas
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
        $validasi = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required'
        ]);


        siswa::where('id', $id)->update(
            [
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nisn' => $request->nisn,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kelas_id' => $request->kelas,
            ]
        );
        return redirect('/guru/datasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        siswa::where('id', $id)->delete();
        return redirect('/guru/datasiswa');
    }
}
