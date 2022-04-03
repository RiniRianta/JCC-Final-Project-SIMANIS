<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_group extends Model
{
    protected $table = 'user_groups';
    protected $fillable = ['group_id', 'user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function group(){
    	return $this->belongsTo('App\group');
    }
}
