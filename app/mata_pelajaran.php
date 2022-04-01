<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    protected $table = 'mata_pelajarans';
    protected $fillable = ['mata_pelajaran', 'guru_id'];

    public function guru()
    {
        return $this->belongsTo('App\guru');
    }

    public function nilai_siswa()
    {
        return $this->hasMany('App\nilai_siswa');
    }

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }
}
