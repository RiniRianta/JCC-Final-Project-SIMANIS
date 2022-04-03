<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(!auth()->check() || auth()->user()->user_group->group_id === 2){
            return view('guru.index');
        }

        if(!auth()->check() || auth()->user()->user_group->group_id === 1){
            $tsiswa = \DB::table('siswas')->get()->count();
            $tguru = \DB::table('gurus')->get()->count();
            $tkelas = \DB::table('kelas')->get()->count();
            $tjurusan = \DB::table('jurusans')->get()->count();
            return view('admin.homepage', compact('tsiswa','tguru','tkelas','tjurusan'));
        }
        
    }
}
