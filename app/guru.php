<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = ['nama_guru', 'jenis_kelamin', 'NIP', 'tempat_lahir', 'tanggal_lahir', 'gol'];

    public function mata_pelajaran()
    {
        return $this->hasMany('App\mata_pelajaran');
    }
}
