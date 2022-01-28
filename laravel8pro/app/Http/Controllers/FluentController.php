<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    //
    public function index(){
    	echo '<h1>Fluent Controller Data</h1>';
    	$slice = Str::of('Welcome to my youtube chanel')->after('Welcome to');
    	echo $slice.'<br>';

    	$slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
    	echo $slice2.'<br>';

    	$stringApend = Str::of("hello")->append('world');
    	echo $stringApend.'<br>';

    	$lower = Str::of('LARAVEL')->lower();
    	echo $lower.'<br>';

    	$replace = Str::of('laravel 7 is the best')->replace('7', '8^');
    	echo $replace.'<br>';

    	$converted = Str::of('laravel 8 tutorial')->title();
    	echo $converted.'<br>';

    	$slug = Str::of('esto sera convertido en slug')->slug();
    	echo $slug.'<br>';

    	$str = Str::of("laravel 1framework")->substr(8);
    	echo $str.'<br>';

    }
}
