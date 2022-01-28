<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
    	$frutas = array("mango","platano","fresa","naranja","sandia");
    	return view('welcome',compact('frutas'));
    }
}
