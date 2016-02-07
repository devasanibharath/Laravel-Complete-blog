@extends('template.main')
@section('title'){{'ZBlog'}}@endsection
@section('metadescription'){{'Metadescription goes here!!'}}@endsection
@section('image'){{'http://localhost:8000/css/images/back.jpg'}}@endsection
@section('url'){{'http://localhost:8000'}}@endsection
@section('content')
	@include('template.partials.main-nav')
	@if(isset($_GET['page']))
		<div class="row-fluid">
			<div class="jumbotron">
				<h1 class="text-center">ZBlog <br>
				<small>post sobre Laravel 5</small></h1>
			</div>
		</div>
	@else
		<header>
			<div class="blur">
				<div class="croisant" id="title">
					ZBlog
				</div>
				<div id="subtitle" class="croisant">
					Based On laravel 5
				</div>
				<div align="center">
					<a onclick="$('#posts').animatescroll({scrollSpeed:2000,easing:'easeOutBounce'});" class="btn btn-web btn-lg">Go to Blog</a>
				</div>
			</div>
		</header>
	@endif
	
	<section id="posts">
		<div class="row-fluid">
			<div class="container">
				<div class="col-md-10">
					@foreach($posts as $p)

						<div class="col-md-12"><a style="text-decoration: none;" href='post/{{$p->slug}}'><h3>{{$p->title}}</h3></a></div>
						<div class="col-md-6">
							<div align="center">
								<a href='post/{{$p->slug}}'><img src="{{$p->photo}}" title="{{$p->title}}" class="img-responsive img-thumbnail"></a>
							</div>
						</div>
						<div class="col-md-6">
							<p style="font-size: 18px; font-family: Georgia; line-height: 1.8em; margin-bottom: 24px; color: rgb(17, 17, 17); letter-spacing: normal;">
								{{str_limit($p->content, $limit = 200, $end = '...')}}
							</p>
							<div>
								<p>Posted in <a href="category/{{$p->category}}">{{$p->category}}</a></p>
							</div>
							<div align="center">
								<?php
									$tags = explode(',', $p->tags);
								 ?>
								 @foreach($tags as $t)
									<a href="tag/{{$t}}"><label class="label label-primary" class="tl">#{{$t}}</label></a>
								 @endforeach
							</div>
							<br>
							<div align="center">
								<a href='post/{{$p->slug}}'class="btn btn-info">Read More</a>
							</div>
						</div>

					<hr/>

					@endforeach
					</div>
				<div class="col-md-2">
					<h3>Categories</h3>
				</div>
			</div>
			<div class="container" align="center">
				<?php echo $posts->render() ?>
			</div>
		</div>
	</section>
	@include('template.partials.footer')
@stop