<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    protected $table = 'absensis';
    protected $fillable = ['kehadiran', 'tanggal', 'mapel_id', 'keterangan'];

    public function mapel()
    {
        return $this->belongsTo('App\mata_pelajaran');
    }
}
