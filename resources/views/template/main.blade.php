<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta name="description" content="@yield('metadescription')">
	<meta name="robots" content="index, follow">
	<!----------------------------------------------------------------->
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="@yield('title')">
	<meta itemprop="description" content="@yield('metadescription')">
	<meta itemprop="image" content="@yield('image')">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="@yield('url')">
	<meta name="twitter:title" content="@yield('title')">
	<meta name="twitter:description" content="@yield('metadescription')">
	<meta name="twitter:image:src" content="@yield('image')">

	<!-- Open Graph data -->
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="@yield('url')" />
	<meta property="og:image" content="@yield('image')" />
	<meta property="og:description" content="@yield('metadescription')" />
	<meta property="og:site_name" content="Zblog" />
	<meta property="article:tag" content="Article Tag" />



	<!------------------------------------------------------------------>

	<title>@yield('title', 'Zblog')</title>
	{{-- Librerias CSS --}}
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/paper/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/curso.css')}}">
	<link rel="stylesheet" href="{{asset('css/trumbowyg.min.css')}}">
</head>
<body id="@yield('id')">
	@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="{{asset('js/animatescroll.min.js')}}"></script>
<script src="{{asset('js/trumbowyg.min.js')}}"></script>
<script>
	$(window).scroll(function() {
		/* Act on the event */
		if ($(this).scrollTop() > 500) {
			$('#navi').removeClass('hide');
			$('#navi').addClass('navbar-fixed-top');			
		}
		else{
			$('#navi').removeClass('navbar-fixed-top');
			$('#navi').addClass('hide');
		};
	});
</script>
@yield('js')
</body>
</html>