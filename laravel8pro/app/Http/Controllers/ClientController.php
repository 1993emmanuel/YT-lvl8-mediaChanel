<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //
    public function getAllPosts(){

    	$response = Http::get('https://jsonplaceholder.typicode.com/posts');
    	return $response->json();
    }

    public function getPostById($id){
    	$response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
    	return $response->json();
    }


    public function addPost(){
    	$post = Http::post('https://jsonplaceholder.typicode.com/posts',[
    		'userId' => 1,
    		'title' => 'Emmanuel post bitch',
    		'body'	=>	'this is a example ahout this project'
    	]);
    	return $post->json();
    }

    public function updatePost(){
    	$post = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
    		'title' => 'titulo nuevo de no se que',
    		'body'	=>	'other title for this'
    	]);
    	return $post->json();
    }

    public function deletePost($id){
    	$post = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
    	return $post->json();
    }

}
