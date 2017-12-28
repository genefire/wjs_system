<?php

namespace wjs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Model 
// 
class User extends Authenticatable
{
    public function men(){
    	return $this->hasMany('Wjs\Men');
    }
}
