<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nama', 'jenis_kelamin', 'NISN', 'tempat_lahir', 'tanggal_lahir', 'kelas_id'];
}
