<nav class="navbar navbar-default hide" role="navigation" id="navi">
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand croisant" href="{{route('home')}}">ZBlog</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<p class="navbar-text">
				by Bharath Devasani
			</p>
		</ul>		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{route('twitter')}}" target="_blank"><i class="fa fa-twitter fa-2x twitter"></i></a></li>
			<li><a href="{{route('facebook')}}" target="_blank"><i class="fa fa-facebook-official fa-2x facebook"></i></a></li>
			<li><a href="{{route('youtube')}}" target="_blank"><i class="fa fa-youtube-play fa-2x youtube"></i></a></li>
			{{--<li><a href="{{route('vine')}}" target="_blank"><i class="fa fa-vine fa-2x vine"></i></a></li>--}}
			<li><a href="{{route('linkedin')}}" target="_blank"><i class="fa fa-linkedin fa-2x linkedin"></i></a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
	</div>
</nav>