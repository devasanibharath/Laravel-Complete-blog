<nav class="navbar navbar-default" role="navigation">
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
				<i class="fa fa-dashboard"></i> Admin Panel
			</p>
		</ul>		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{route('newp')}}"><i class="fa fa-plus"></i> Create New Post</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Category <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="{{route('catesite')}}">All Categories</a></li>
					<li><a href="{{route('newc')}}"><i class="fa fa-plus"></i> Create New Category</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->username}} <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
	</div>
</nav>