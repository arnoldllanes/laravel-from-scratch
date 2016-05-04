<?php

namespace App;

use App\Note;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	public function notes()
	{
		return $this->hasMany('App\Note');
	}
	
    public function addNote(Note $note)
    {
    	return $this->notes()->save($note);
    }
}