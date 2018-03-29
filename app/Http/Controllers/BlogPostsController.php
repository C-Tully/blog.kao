<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPosts;

class BlogPostsController extends Controller
{	

	/*
	*	function: 	index
		accepts:	n/a
		returns:	initial view
	*
	*/
	public function index(){

		$blogPosts = BlogPosts::scopeGetTwoRecentPosts();
		return view('blog.index',compact('blogPosts'));
	}


	/*
	*	function: 	getSingleBlogPost
		accepts:	[timestamp]$date
		returns:	returns singular blog post
	*
	*/
	public function getSingleBlogPost($date){

		$blogPost = BlogPosts::find($date);		
		return view('blog.post',compact($blogPost));

	}


	/*
	*	function: 	getNextPage
		accepts:	[timestamp]$date
		returns:	returns two blog posts
	*
	*/
	public function getNextPage($date){

	}


}
