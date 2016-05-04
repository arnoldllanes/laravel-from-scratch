<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Card;

class Note extends Model
{
	protected $fillable = ['body', 'user_id', 'card_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function card(){
    	return $this->belongsTo('App\Card');
    }
}
