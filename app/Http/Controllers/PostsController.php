<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\BlogPosts;

class PostsController extends Controller
{
    //
    public function index(){
    	
    	return view('posts.index');
    }


    public function create(){
    	
    	return view('posts.create');
    }

    public function show(BlogPosts $post){    	

    	return view('posts.show',compact('post'));
    }


    //Create new post using request data
    //Save it to the database
    //redirect to the home page
    public function store(){

    	//Get Form data from request
    	// $post = new Post;

    	// $post->title = request('title');
    	// $post->body = request('body');

    	$this->validate(request(),[
    		'title' =>'required',
    		'body' =>'required'
    	]);

    	Post::create([
    		'h2_header' => request('title'),
    		'body'	=> request('body')
    	]);

    	if($post->save()){
    		redirect('/');
    	}
    }
}
