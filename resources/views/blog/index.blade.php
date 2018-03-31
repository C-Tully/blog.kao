
@extends('layouts.master')

@section ('content')
	<div class="row">

        <div class="col-sm-8 blog-main"><!-- Start blog Post -->
            @include('blog.postIteration')
            

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