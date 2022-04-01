<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusans';
    protected $fillable = ['nama'];

    public function kelas()
    {
        return $this->hasMany('App\kelas');
    }
}
