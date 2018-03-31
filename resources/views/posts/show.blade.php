@extends('layouts.master')

@section('content')
	<div class="col-sm-8 blog-main">


		<div class="blog-post">
            <h2 class="blog-post-title">
            	<a href="/posts/{!! $post->id !!}">
            		{!!$post->h2_header!!}
            	</a>
            </h2>
            <p class="blog-post-meta">Posted By:
                <a href="#">{{$post->author}}</a>                                
    	   		<p class="blog-post-meta">Created on: {{$post->created_at->toFormattedDateString()}}</p>
            </p>
            <!-- for the time being mark up is included in the post -->
        	{!! $post->body !!} 
        	<div class="comments">
        		<ul class="list-group">
        			
        		
	        		@foreach ($post->comments as $comment)
	        			<li class="list-group-item">
	        				<strong>{{$comment->created_at->diffForHumans()}}: </strong>
	        				{{ $commentt->body }}
	        			</li>
	        		@endforeach
        		
        		
        		</ul>
        	</div>        	               	   
    	</div><!-- /.blog-post -->   
    	<!-- Add a comment -->
    	<hr>
    	<div class="card">
    		<div class="card-block">
    			
    		</div>

    	</div>
			@include('forms.commentBox')
			@include('forms.errorBlock')
	</div>
@endsection

