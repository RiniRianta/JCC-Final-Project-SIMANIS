<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(Request $request) {
        $tsiswa = \DB::table('siswas')->get()->count();
        $tguru = \DB::table('gurus')->get()->count();
        $tkelas = \DB::table('kelas')->get()->count();
        return view('admin.homepage', compact('tsiswa','tguru','tkelas'));
    }

    public function masterjurusan() {
        return view('admin.master.mjurusan');
    }

    public function masterkelas() {
        return view('admin.master.mkelas');
    }

    public function masterguru() {
        return view('admin.master.mguru');
    }

    public function mastermapel() {
        return view('admin.master.mpelajaran');
    }
}
