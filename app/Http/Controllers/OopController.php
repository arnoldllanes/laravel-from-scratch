<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OopController extends Controller
{
    public function index()
    {
    	return view('Oop.index');
    }
}
