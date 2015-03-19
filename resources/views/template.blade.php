<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		{!!HTML::style('//fonts.googleapis.com/css?family=Lato:100')!!}
		{!!HTML::style('css/jquery.fancybox.css')!!}
		{!!HTML::style('css/style.css')!!}
		{!!HTML::script('js/jquery-1.10.1.min.js')!!}
	</head>
	<body>
		<div class="container">
			<div class="content">
				@yield('content')
			</div>
		</div>
		{!!HTML::script("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js")!!}
		{!!HTML::script('js/jquery.fancybox.pack.js')!!}
	</body>
</html>

