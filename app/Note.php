<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Card;

class Note extends Model
{
	protected $fillable = ['body'];

	/**
     * Note attribute to User Model
     *
     * @return \belongsTo
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Note attribute to Card Model
     *
     * @return \belongsTo
     */
    public function card(){
    	return $this->belongsTo('App\Card');
    }
}
