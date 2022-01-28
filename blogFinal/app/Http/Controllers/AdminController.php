<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //login View
    function login(){
    	return view('backend.login');
    }
}
