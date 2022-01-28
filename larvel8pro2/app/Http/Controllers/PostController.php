<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Coment;

class PostController extends Controller
{
    //
    public function addPost(){
    	return view('add-post');
    }

    //
    public function createPost(Request $request){
    	$post = new Post();
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();
    	return back()->with('post_created', 'Post has been created succesfully');
    }

    //
    public function getPosts(){
    	$posts = Post::orderby('id','DESC')->get();
    	return view('posts', compact('posts'));

    }

    //
    public function getPostById($id){
    	$post = Post::where('id',$id)->first();
    	return view('single-post',compact('post'));
    }

    //
    public function deletePost($id){
    	Post::where('id',$id)->delete();
    	return back()->with('post_deleted', 'the post was deleted successfully');
    }

    //
    public function editPost($id){
    	$post = Post::find($id);
    	return view('edit-post',compact('post'));
    }

    //
    public function updatePost(Request $request){
    	$post = Post::find($request->id);
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();
    	return back()->with('post_updated', 'the post was updated successfully');
    }


    //
    public function addPostComment(){
        $post = new Post;
        $post->title = "Ejemplo de esta actividad";
        $post->body = "contenido que tendra comentarios";
        $post->save();
        return "you add a post in the DB";
    }

    //
    public function addComment($id){
        $post = Post::find($id);

        $coment = new Coment();
        $coment->comment = "este es un comentario";
        $post->comments()->save($coment);
        return "the comment has been posted";
    }

    //
    public function getComentByPost($id){
        $comentarios = Post::find($id)->comments;
        return $comentarios;

    }


}
