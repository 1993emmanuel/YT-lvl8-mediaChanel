<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
    	return view('login');
    }

    public function loginSubmit(Request $req){
    	// return 'Form Submited';
    	$validateData = $req->validate([
    		'email'	=>	'required | email',
    		'password'	=>	'required | min:6 | max:12'
    	]);
    	$email = $req->input('email');
    	$password = $req->input('password');
    	return 'Email adress is : '.$email.'<br> Password is : '.$password;
    }

}
