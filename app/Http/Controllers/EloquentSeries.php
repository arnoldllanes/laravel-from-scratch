<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EloquentSeries extends Controller
{
    public function index()
    {
    	return view('eloquent.index');
    }
}
