<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class SubscriptionsController extends Controller
{
    public function store(Billable $billable)
    {
    	DB:transaction(function($billable){
    		//bill the user using stripe
    		$customer = $billable->createCustomer('token');
    		//create the customer
    		$user = User::register('yadayada');
    		//create the new user on our website
    	});
    	//create their account
    	//bill them
    }
}
