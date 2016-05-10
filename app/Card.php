<?php

namespace App;

use App\Note;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	/**
     * A card has many notes
     *
     * @return \hasMany
     */
	public function notes()
	{
		return $this->hasMany('App\Note');
	}
	
	/**
     * Adding a note to the card model with the id of the user
     *
     * 
     * @param Note , UserID
     * @return note save with note
     */
    public function addNote(Note $note, $userId)
    {
    	$note->user_id = $userId;
    	return $this->notes()->save($note);
    }
}
