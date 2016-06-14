<?php

class Mailer 
{

}

class RegistersUsers
{
	protected $mailer;
	//Dependency Injection
	public function __construct(Mailer $mailer) 
	{
		$this->mailer = $mailer;
	}

	//Method injection
	public function setMailer(Mailer $mailer)
	{
		$this->mailer = $mailer;
	}
}


// App::bind('RegistersUsers', function(){
// 	return new RegistersUsers(new Mailer);
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('begin', function() {
	flash('You are signed in!', 'info');

	return redirect('/');
});


// Route::get('/', function (RegistersUsers $registration) {
//     var_dump($registration);
// });

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');

Route::get('/scratch', 'OopController@index');

Route::get('/eloquent-series', 'EloquentSeries@index');
Route::resource('subscriptions', 'SubscriptionsController');



