<?php

class Task {
	public $description;

	public $completed = false;
	//Function in a class is a method; on an object
	//a method called immediately when a class is instantiated; when a new task is made the construct is ran
	public function __construct($description)
	{
		$this->description = $description;
	}

	public function complete()
	{
		return $this->completed = true;
	}
}

$task = new Task('Learn OOP');
$task2 = new Task('Pick up groceries');

var_dump($task->complete());