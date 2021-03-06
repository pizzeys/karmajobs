@include('global.top-bar')
@include('search.sections.side-menu')
@include('global.footer')
@include('include.scripts')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Page Not Found</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/js/jquery.mousewheel.min.js" type="application/javascript"></script>
	<script src="/js/jquery.mCustomScrollbar.min.js" type="application/javascript"></script>
	<script src="/js/icheck.min.js" type="application/javascript"></script>
	<link rel="stylesheet" href="/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="/css/minimal/minimal.css">
	<link rel="stylesheet" href="/css/minimal/grey.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="icon" type="image/png" href="/img/favicon.png">

	@yield('scripts-global')
</head>
<body>
@include('include.google-analytics')
@yield('top-bar')
<div id="middle">
	@yield('side-menu')
	<div id="page" class="main-column">
		The requested page was not found. Please use the search on the left, <a href="javascript:window.history.back()">return
			to the previous page</a>, or <a href="/">go back to the home page</a>.
	</div>
</div>
@yield('footer')
</body>
</html>

