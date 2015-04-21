<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
   		@section('meta_keywords')
   			<meta name="keywords" content="your, awesome, keywords, here"/>
   		@show @section('meta_author')
   			<meta name="author" content="Aicy">
   		@show @section('meta_description')
   			<meta name="description" content="this is user laravel5 make net in the first">			
   		@show
		<title>@section('title') AICY QQK @shsow</title>
		<link href="{{ asset('assets/site/css/bootstrap.min.css')}}" rel="stylesheet">
		@yield('styles')
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="{{{ asset('assets/site/ico/favicon.ico') }}}">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<header id="header">

		</header>
		<section>
			<div class="container">
				@yield('content')
			</div>
		</section>
		<footer id="fooder">

		</footer>
		<!--script  start-->
		<script src="{{ asset('assets/site/js/jquery.min.js')}}"></script>
		<script src="{{ asset('assets/site/js/bootstrap.min.js')}}"></script>
	</body>
</html>