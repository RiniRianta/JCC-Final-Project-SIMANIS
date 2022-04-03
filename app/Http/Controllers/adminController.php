<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(Request $request) {
        $tsiswa = \DB::table('siswas')->get()->count();
        $tguru = \DB::table('gurus')->get()->count();
        $tkelas = \DB::table('kelas')->get()->count();
        $tjurusan = \DB::table('jurusans')->get()->count();
        return view('admin.homepage', compact('tsiswa','tguru','tkelas','tjurusan'));
    }

    public function masterjurusan() {
        return view('master.jurusan.mjurusan');
    }

    public function masterkelas() {
        return view('master.kelas.mkelas');
    }
}
