<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		 <!-- Custom Theme files -->
		<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!---- animated-css ---->
		<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="{{asset('js/jquery.corner.js')}}"></script> 
		<script src="{{asset('js/wow.min.js')}}"></script>
		<script>
		 new WOW().init();
		</script>
		<!---- animated-css ---->
		<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<div class="bg">
		<!----- start-header---->
		<div class="container">
			<div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
					<div class="top-header">
						<div class="logo">
							<a href="#">Ruddy</a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="#about" class="scroll">about</a></li>
								<li><a href="#process" class="scroll">process</a></li>
								<li><a href="#port" class="scroll">portfolio</a></li>
								<li class="page-scroll"><a href="#contact" class="scroll">contact</a></li>
								<li class="active-join" class="page-scroll"><a href="#team" class="scroll">join us</a></li>
							</ul>
							<a href="#" id="pull"><img src="{{asset('img/nav-icon.png')}}" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!---- banner-info ---->
			<div class="banner-info">
				<div class="container">
					<h1 class="wow fadeIn" data-wow-delay="0.5s"><br /></h1>
				<div class="top-banner-grids wow bounceInUp" data-wow-delay="0.4s">
					<div class="banner-grid text-center">
						<span class="top-icon1"> </span>
						<h3>analytics</h3>
					</div>
					<div class="banner-grid banner-grid-active text-center">
						<span class="top-icon2"> </span>
						<h3>strategy</h3>
					</div>
					<div class="banner-grid text-center">
						<span class="top-icon3"> </span>
						<h3>branding</h3>
					</div>
					<div class="banner-grid text-center">
						<span class="top-icon4"> </span>
						<h3>promotion</h3>
					</div>
					<div class="banner-grid text-center">
						<span class="top-icon5"> </span>
						<h3>sales</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
			<!---- banner-info ---->
			<!---- top-grids ---->
			<div class="top-grids text-center">
				<div class="container">
					<div class="col-md-3 wow bounceIn" data-wow-delay="0.4s">
						<div class="top-grid">
							<span class="icon1"> </span>
							<h3><a href="#">right strategy</a></h3>
							<label> </label>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,</p>
						</div>
					</div>
					<div class="col-md-3 wow bounceIn" data-wow-delay="0.8s">
						<div class="top-grid">
							<span class="icon2"> </span>
							<h3><a href="#">adaptive style</a></h3>
							<label> </label>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,</p>
						</div>
					</div>
					<div class="col-md-3 wow bounceIn" data-wow-delay="1.0s">
						<div class="top-grid">
							<span class="icon3"> </span>
							<h3><a href="#">money making</a></h3>
							<label> </label>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,</p>
						</div>
					</div>
					<div class="col-md-3 wow bounceIn" data-wow-delay="1.2s">
						<div class="top-grid">
							<span class="icon4"> </span>
							<h3><a href="#">brand keaping</a></h3>
							<label> </label>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!---- top-grids ---->
			<!---- about ---->
			<div id="about" class="about">
				<div class="head-section">
					<div class="container">
						<h3><span>about</span><label>ruddy .</label></h3>
					</div>
				</div>
					<!--- about-grids ---->
					<div class="about-grids">
						<div class="col-md-4 about-grid about-grid1 wow fadeInLeft" data-wow-delay="0.4s">
							<div class="about-grid-info">
								<h4><a href="#">this is a point about the company</a></h4>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed </p>
							</div>
							<div class="about-grid-pic">
							<img src="{{asset('img/about-pic1.jpg')}}" title="name" />
							</div>
						</div>
						<div class="col-md-4 about-grid about-grid2 wow fadeInUp" data-wow-delay="0.4s">
							<div class="about-grid-pic">
							<img src="{{asset('img/about-pic2.jpg')}}" title="name" />
							</div>
							<div class="about-grid-info">
								<h4><a href="#">this is a point about the company</a></h4>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed </p>
							</div>
						</div>
						<div class="col-md-4 about-grid about-grid1 wow fadeInRight" data-wow-delay="0.4s">
							<div class="about-grid-info">
								<h4><a href="#">this is a point about the company</a></h4>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed </p>
							</div>
							<div class="about-grid-pic">
							<img src="{{asset('img/about-pic3.jpg')}}" title="name" />
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--- /about-grids ---->
				</div>
			</div>
			<!---- about ----> 
			
			 <!-- process  -->
			<div id="process" class="process">
				<div class="head-section">
					<div class="container">
						<h3><span>Our</span><label>process .</label></h3>
					</div>
				</div>
				<div class="container">
					<div class="process-grids text-center wow bounce" data-wow-delay="0.4s">
						<div class="col-md-3 process-grid process-grid1 wow bounceInUp" data-wow-delay="0.4s">
							<span class="p-icon1"> </span>
							<h4><a href="#">meeting</a></h4>
						</div>
						<div class="col-md-3 process-grid process-grid2 wow bounceInDown" data-wow-delay="0.4s">
							<span class="p-icon2"> </span>
							<h4><a href="#">analysis</a></h4>
						</div>
						<div class="col-md-3 process-grid process-grid3 wow bounceInUp" data-wow-delay="0.4s">
							<span class="p-icon3"> </span>
							<h4><a href="#">making</a></h4>
						</div>
						<div class="col-md-3 process-grid process-grid4 wow bounceInDown" data-wow-delay="0.4s">
							<span class="p-icon4"> </span>
							<h4><a href="#">success</a></h4>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!--- process --->
			<!--- blog --
			<div class="blog">
				<div class="head-section">
					<div class="container">
						<h3><span>Our</span><label>blog .</label></h3>
					</div>
				</div>
				<!---- blog-grids ---->
				<div class="blog-grids">
					<div class="container"> 
					<div class="blog-grids-left">
							<div class="blog-grid-left wow bounceIn" data-wow-delay="0.4s">
								<div class="blog-art-pic">
									<img src="{{asset('img/b1.jpg')}}" title="name" />
								</div>
								<div class="blog-art-info">
									<h3><a href="#">Heading</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
										<li class="blog-art-info-stags-right">
											<ul>
												<li><a href="#"> <label class="b-icon1"> </label>24</a></li>
												<li><a href="#"> <label class="b-icon2"> </label>9</a></li>
											</ul>
										</li>
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
							<div class="blog-grid-left wow bounceIn" data-wow-delay="0.4s">
								<div class="blog-art-pic">
									<img src="{{asset('img/b2.jpg')}}" title="name" />
								</div>
								<div class="blog-art-info">
									<h3><a href="#">Heading</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
										<li class="blog-art-info-stags-right">
											<ul>
												<li><a href="#"> <label class="b-icon1"> </label>24</a></li>
												<li><a href="#"> <label class="b-icon2"> </label>9</a></li>
											</ul>
										</li>
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
						<div class="clearfix"> </div>
						<!---- ---->
						<div class="blog-grid-left-big wow bounceIn" data-wow-delay="0.4s">
							<div class="blog-grid-left-big-info">
								<div class="blog-art-info">
									<h3><a href="#">Heading</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
										<li class="blog-art-info-stags-right">
											<ul>
												<li><a href="#"> <label class="b-icon1"> </label>24</a></li>
												<li><a href="#"> <label class="b-icon2"> </label>9</a></li>
											</ul>
										</li>
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
							<div class="blog-grid-left-big-pic">
								<div class="blog-art-pic">
									<img src="{{asset('img/b4.jpg')}}" title="name" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="blog-grids-right wow bounceIn" data-wow-delay="0.4s">
						<div class="blog-grid-left blog-grid-right">
								<div class="blog-art-pic">
									<img src="{{asset('img/b3.jpg')}}" title="name" />
								</div>
								<div class="blog-art-info">
									<h3><a href="#">Heading</a></h3>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
									<ul class="blog-art-info-stags">
										<li class="blog-art-info-stags-left"><span>12.11.2014</span></li>
										<li class="blog-art-info-stags-right">
											<ul>
												<li><a href="#"> <label class="b-icon1"> </label>24</a></li>
												<li><a href="#"> <label class="b-icon2"> </label>9</a></li>
											</ul>
										</li>
										<div class="clearfix"> </div>
									</ul>
								</div>
							</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!---- blog-grids ---->
				</div>
			</div>
			<!--- blog ---->
			<!--- portfolio ---->
			<div id="port" class="portfolio">
				<div class="head-section">
					<div class="container">
						<h3>portfolio .</h3>
					</div>
				</div>
				<!--- Portfolio --->
			<div id="port" class="portfolio-box">
				
					<!---- start-portfolio-script----->
					<script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}"></script>
					<script type="text/javascript">
						$(function () {
							var filterList = {
								init: function () {
								
									// MixItUp plugin
									// http://mixitup.io
									$('#portfoliolist').mixitup({
										targetSelector: '.portfolio',
										filterSelector: '.filter',
										effects: ['fade'],
										easing: 'snap',
										// call the hover effect
										onMixEnd: filterList.hoverEffect()
									});				
								
								},
								hoverEffect: function () {
									// Simple parallax effect
									$('#portfoliolist .portfolio').hover(
										function () {
											$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
											$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
										},
										function () {
											$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
											$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
										}		
									);				
								
								}
					
							};
							// Run the show!
							filterList.init();
						});	
					</script>
					<div class="container">
						<!----//End-portfolio-script----->
						<ul id="filters" class="clearfix">
							<li class="filtter-color1"><span class="filter active" data-filter="app card icon logo web">All</span></li>
							<li class="filtter-color2"><span class="filter" data-filter="app">business</span></li>
							<li class="filtter-color3"><span class="filter" data-filter="card">building</span></li>
							<li class="filtter-color4"><span class="filter" data-filter="icon">medicine</span></li>
							<li class="filtter-color5"><span class="filter" data-filter="app">entertainment</span></li>
						</ul>
					</div>
					<div id="portfoliolist">
					<div class="portfolio logo1 mix_all port-big-grid wow bounceIn" data-wow-delay="0.5s" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic1.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>				
					<div class="portfolio app mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic2.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>		
					<div class="portfolio web mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic3.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>				
					<div class="portfolio icon mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic4.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>	
					<div class="portfolio app mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic5.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>			
					<div class="portfolio card mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic6.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>	
					<div class="portfolio icon mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic7.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>	
					<div class="portfolio app mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic8.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>			
					<div class="portfolio card mix_all wow bounceIn" data-wow-delay="0.5s" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="{{asset('img/portpic9.jpg')}}" /><div class="b-wrapper">
						     	<h2 class="b-animate b-from-left    b-delay03 ">
						     		<div class="caption">
						     			<h4>heading of project</h4>
						     			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
						     		</div>
						     	</h2>
						  	</div></a>
		                </div>
					</div>	
					<div class="clearfix"> </div>	
				</div>
			</div>
				</div>
			</div>
			<!---- work-with-us---->
			<div class="work-with-us text-center">
				<div class="container">
					<h4>YOU ALSO WANT? WORK WITH US!</h4>
					<p>Send the application form for a free call and our manager will contact with you</p>
					<a class="catch-me wow shake" data-wow-delay="0.3s" href="#">contact us</a>
				</div>
			</div>
			<!---- work-with-us---->
			<!--- portfolio ---->
			<!---- Team ----->
			<div id="team" class="team">
				<div class="head-section">
					<div class="container">
						<h3><span>our amazing</span><label>team .</label></h3>
					</div>
				</div>
				<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
							    <script src="{{asset('js/owl.carousel.js')}}"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 3,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel text-center">
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="{{asset('img/team-member1.png')}}" alt="name">
					                	<h5><span>Peter</span> Holmes</h5>
					                	<label>Marketing</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="{{asset('img/team-member2.png')}}" alt="name">
					                	<h5><span>Kenny</span> Johns</h5>
					                	<label>CEO</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="{{('img/team-member3.png')}}" alt="name">
					                	<h5><span>Trisha </span> Steplton</h5>
					                	<label>Designer</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="{{asset('img/team-member1.png')}}" alt="name">
					                	<h5><span>Peter</span> Holmes</h5>
					                	<label>Marketing</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="{{asset('img/team-member2.png')}}" alt="name">
					                	<h5><span>Kenny</span> Johns</h5>
					                	<label>CEO</label>
					                </div>
					                <div class="item wow zoomIn" data-wow-delay="0.3s">
					                	<img class="lazyOwl" data-src="{{asset('img/team-member3.png')}}" alt="name">
					                	<h5><span>Trisha </span> Steplton</h5>
					                	<label>Designer</label>
					                </div>
				              </div>
						<!--//sreen-gallery-cursual---->
			</div>
			</div>
			<!---- Team ----->
			<!---- map ---->
			<div id="contact" class="map">
				<div class="map-location">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1667809.5405374563!2d-98.19684021195167!3d35.27017247326614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87ac3911b1ac4f9d%3A0x5d1ccf33400aea48!2sOklahoma%2C+USA!5e0!3m2!1sen!2sin!4v1405178655430"> </iframe>
				</div>
				<div class="contact-info text-center wow fadeInLeft" data-wow-delay="0.3s">
					<h4><span>Ruddy</span>Marketing Agency</h4>
					<p><span class="map-icon1"> </span>119 N Salisbury NC 2760</p>
					<p><span class="map-icon2"> </span>info@ruddy.com</p>
					<p><span class="map-icon3"> </span>223-323-232-3232</p>
				</div>
			</div>
			<!---- map ---->
			<div class="clearfix"> </div>
			<!---- footer --->
			<div class="footer text-center">
				<div class="container">
					<div class="footer-inner wow zoomIn" data-wow-delay="0.3s">
						<ul>
							<li><a href="#"><img src="{{asset('img/footer-logo.png')}}" title="ruddy" /></a></li>
							<li><a class="contact-me" href="#">contact us</a></li>
						</ul>
					</div>
					<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
			<!---- footer --->
		</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>