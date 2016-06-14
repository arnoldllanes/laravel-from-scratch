<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class EloquentSeries extends Controller
{
    public function index()
    {
    	$posts = Post::where('id', '>=', 1)->get();

    	return $posts;


    	return view('eloquent.index');
    }
}
