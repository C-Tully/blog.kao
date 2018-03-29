
@extends('layouts.master')

@section ('content')
	<div class="row">

        <div class="col-sm-8 blog-main"><!-- Start blog Post -->

        	<!-- ideally this section would be the result of a loop that spits out the blog posts -->
            @foreach ($blogPosts as $post) 

                @unless($post->body > 0)

                	<div class="blog-post">
                        <h2 class="blog-post-title">{!!$post->h2_header!!}</h2>
                        <p class="blog-post-meta">Posted By:
                            <a href="#">{{$post->author}}</a>                                
                	   		<p class="blog-post-meta">Created on: {{$post->created_at->format('m/d/Y')}}</p>
                        </p>
                        <!-- for the time being mark up is included in the post -->
                    	{!! $post->body !!}                	   
                	</div><!-- /.blog-post -->   

                @endunless     	
            @endforeach
            

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
        </div><!-- /.blog-main -->

            @include('sidebar.about')
    </div>

@endsection

@section ('footer')
<!-- Note that this script will only be loaded in this specific view -->
	<script src="something"></script>
@endsection