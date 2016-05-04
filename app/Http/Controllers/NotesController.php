<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {	
    		Note::create([
    			'body' => $request->input('body'),
    			'card_id' => $card->id,
    			'user_id' => 1,
    		]);
        
    	return back();
    }

   public function edit(Note $note)
   {
   		return view('notes.edit')->with('note', $note);
   }

   public function update(Request $request, Note $note)
   {
   		$note->update($request->all());
   		
   		return view('card.card');
   }

}
