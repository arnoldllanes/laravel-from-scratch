<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//public outside of this class anyone can access this property
   	public $description = 'Go to the store';
}

$task
