<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home() {
        return view('admin.homepage');
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
