<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\mata_pelajaran;
use App\siswa;
use App\absensi;


class absensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kelas = kelas::all();
        $mata_pelajaran = mata_pelajaran::all();
        $siswa = siswa::all();
        return view('guru.absensi.tambah', [
            'kelas' => $kelas,
            'mata_pelajaran' => $mata_pelajaran
        ]);
    }

    public function findMapel($request)
    {
        $data = mata_pelajaran::select('mata_pelajaran', 'id')->where('kelas_id', $request)->take(100)->get();
        return response()->json($data);
    }

    public function findSiswa($request)
    {
        $data = siswa::select('nama', 'id')->where('kelas_id', $request)->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = siswa::all();
        // dd($_POST['kehadiran' . 1]);
        $i = 1;

        foreach ($siswa as $item) {
            $absensi = new absensi;
            $absensi->siswa_id = $item->id;
            $absensi->kehadiran = $_POST['kehadiran' . $i++];
            $absensi->tanggal = $request->tanggal;
            $absensi->mapel_id = $request->mata_pelajaran;
            $absensi->keterangan = " ";
            $absensi->save();
        }
        return redirect('/');
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
