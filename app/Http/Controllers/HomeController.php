<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('operator.homepage');
    }
    public function guru()
    {
        return view('guru.index');

    }

    public function admin(Request $request) {
        $tsiswa = \DB::table('siswas')->get()->count();
        $tguru = \DB::table('gurus')->get()->count();
        $tkelas = \DB::table('kelas')->get()->count();
        $tjurusan = \DB::table('jurusans')->get()->count();
        return view('admin.homepage', compact('tsiswa','tguru','tkelas','tjurusan'));
    }


   
}
