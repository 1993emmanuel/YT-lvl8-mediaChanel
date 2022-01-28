<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

	public function index($name = null){
		return "hello from index this is for homeController ".$name;
	}

}
