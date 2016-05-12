<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Http\Requests;

use App\Http\Requests\CardRequest;

use App\Note;
use App\Card;

class NotesController extends Controller
{
    /**
    * Store a new note
    *
    * @return
    * @param addNote $note and $userId stated in Card Model
    */
    public function store(CardRequest $request, Card $card)
    {	
        $note = new Note($request->all());

        $card->addNote($note, 1);

        return back();
    }

      /**
      * Route to a notes edit page
      *
      * @return view notes.edit
      */
    public function edit(Note $note)
    {
  	     return view('notes.edit')->with('note', $note);
    }

      /**
      * Update the note
      *
      * @var note
      * @return view card
      */
      public function update(Request $request, Note $note)
      {
            $note->update($request->all());

            return view('card.card');
      }

}
