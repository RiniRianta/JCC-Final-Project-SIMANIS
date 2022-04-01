<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['kelas', 'jurusan_id'];

    public function siswa()
    {
        return $this->hasMany('App\siswa');
    }

    public function jurusan()
    {
        return $this->belongsTo('App\jurusan');
    }

    public function mata_pelajaran()
    {
        return $this->hasMany('App\mata_pelajaran');
    }
}
