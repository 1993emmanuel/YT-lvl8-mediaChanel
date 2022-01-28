<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
	public function index(Request $req){
		return $req->method()."<br> path ".$req->path().'<br> url '.$req->url()."<br> fullUrl ".$req->fullUrl();
	}

}
