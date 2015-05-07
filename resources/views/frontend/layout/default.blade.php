<!DOCTYPE html>
<html lang="zh-CN">
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
		<title>@section('title') AICY QQK @show</title>
		<link href="{{ asset('assets/site/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{ asset('assets/site/css/home-top.css') }}" rel="stylesheet">
		@yield('styles')
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="{{ asset('assets/site/ico/favicon.ico') }}">
		<script src="{{ asset('assets/site/js/sea.js')}}"></script>
		@yield('css')
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-inverse" style="border-radius:0;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">欢迎来到Aicy测试站</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right" id="hover-top-li">
					<li><a href="#">Home</a></li>
					<li><a href="#">Home2</a></li>
					<li><a href="#">Home3</a></li>
					<li><a href="#">Home4</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="buttom" aria-expanded="false">更多选项<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">action</a></li>
							<li><a href="#">action1</a></li>
							<li><a href="#">action2</a></li>
						</ul>
					</li>
				</ul>
				</div>	
			</div>
		</nav>		
		<section>
			<div class="container">
				@yield('content')
			</div>
		</section>
		<!-- <footer id="fooder"> -->
			<!-- <div class="container">
				<div class="row">
				  <div class="col-xs-4">.col-md-4</div>
  				  <div class="col-xs-4">.col-md-4</div>
  				  <div class="col-xs-4">.col-md-4</div>
				</div>
			</div> -->
		<!-- </footer> -->
		<!--script  start-->
		@yield('script')
	</body>
</html>