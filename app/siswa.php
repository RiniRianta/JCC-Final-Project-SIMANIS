<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nama', 'jenis_kelamin', 'NISN', 'tempat_lahir', 'tanggal_lahir', 'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }

    public function nilai_siswa()
    {
        return $this->hasMany('App\nilai_siswa');
    }

    public function absensi()
    {
        return $this->hasMany('App\absensi');
    }
}
