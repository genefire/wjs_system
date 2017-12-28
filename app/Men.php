<?php

namespace wjs;

use Illuminate\Database\Eloquent\Model;

class Men extends Model
{
	protected $fillable = [
	    'first_name',
	    'middle_initial',
	    'last_name',
	    'email',
	    'number',
	    'address',
	    'sponsor'
	];

    public function user(){
    	return $this->belongTo('Wjs/User');
    }


}
