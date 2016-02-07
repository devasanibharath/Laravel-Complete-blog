@extends('template.main')
@section('title'){{$post->title .' | ZBlog'}}@endsection
@section('metadescription'){{$post->metadescription}}@endsection
@section('image'){{$post->photo}}@endsection
@section('url'){{'http://localhost/post/'.$post->slug}}@endsection
@section('content')
	@include('template.partials.navbar')
	<div class="row-fluid" style="background-image: url('{{$post->photo}}'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
		<div class="blur">
			<div id="artitle" class="croisant">
				{{$post->title}}
			</div>
		</div>
	</div>
	<div class="row-fluid"> 
		<div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8" align="center">
			<br>
				<?php 
					$tags = explode(',', $post->tags);
				 ?>
				 @foreach($tags as $t)
					<a href="../tag/{{$t}}" class="tl"><label class="label label-success">#{{$t}}</label></a>
				 @endforeach
				<br>
				<hr>
				<div align="justify" style="font-size: 18px; font-family: Georgia; line-height: 1.8em; margin-bottom: 24px; color: rgb(17, 17, 17); letter-spacing: normal;">
					{!! $post->content !!}
				</div>
				<hr>
				<div class="fb-comments" data-href="http://localhost/www/blog/public/post/{{$post->slug}}" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
				<a href="{{route('home')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i> start</a>
				<br>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<br>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=109593556094443";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	@include('template.partials.footer')
@stop