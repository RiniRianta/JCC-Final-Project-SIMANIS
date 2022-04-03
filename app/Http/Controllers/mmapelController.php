<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mata_pelajaran;

class mmapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = mata_pelajaran::all();

        return view('master.mapel.mpelajaran', [
            'mapel' => $mapel,
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
        $tmapel = new mata_pelajaran;
        $tmapel->mata_pelajaran = $request->mata_pelajaran;
        $tmapel->guru_id = $request->guru_id;
        $tmapel->kelas_id = $request->kelas_id;
        $tmapel->save();
        $tmapel = mata_pelajaran::all();
        return redirect('/admin/mapel')->with('success', 'Show is successfully saved');
        
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
        mata_pelajaran::where('id', $id)->update(
            [
                'mata_pelajaran' => $request->mata_pelajaran,
                'guru_id' => $request->guru_id,
                'kelas_id' => $request->kelas_id
            ]
        );
        return redirect('/admin/mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mata_pelajaran::where('id', $id)->delete();

        return redirect('/admin/mapel')->with('success','Post deleted successfully');
    }
}
