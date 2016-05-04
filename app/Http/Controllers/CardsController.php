<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Card;

use App\Note;

class CardsController extends Controller
{
    public function index()
    {
    	$cards = Card::all();
    	return view('card.card')->with('cards', $cards);
    }

    public function show(Card $card)
    {
    	$card->load('notes.user');

    	return view('card.show')->with('card', $card);
    }
}
