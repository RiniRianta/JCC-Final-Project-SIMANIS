<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
        protected $table = 'groups';
    protected $fillable = ['name', 'description'];

    public function user_group(){
    	return $this->hasOne('App\user_group');
    }
}
