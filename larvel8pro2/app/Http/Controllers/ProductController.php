<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

	public function addProduct(){
		$products = [
			['name'	=>	'platano'],
			['name'	=>	'limon'],
			['name'	=>	'limon grande'],
			['name'	=>	'limon chico'],
			['name'	=>	'limon sin semilla'],
			['name'	=>	'lima'],
			['name'	=>	'naranja'],
			['name'	=>	'toronja'],
			['name'	=>	'melon'],
			['name'	=>	'sandia'],
			['name'	=>	'mango'],
			['name'	=>	'mango verde'],
			['name'	=>	'sandia cuadrada'],
		];
		Product::insert($products);
		return 'product has been inserted successfully!!!';
	}

	//
	public function search(){
		return view('search');
	}

	//
	public function autocomplete(Request $request){
		$datas = Product::select("name")->where("name","LIKE","%{$request->terms}%")->get();
		return response()->json($datas);
	}


}
