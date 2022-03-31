<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_pelajaran extends Model
{
    protected $table = 'mata_pelajarans';
    protected $fillable = ['mata_pelajaran', 'guru_id'];
}
