<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
    	================================================== -->
    	<meta charset="<?php bloginfo('charset');?>">
    	<meta name="description" content="Free Responsive Html5 Css3 Templates | Zerotheme.com">
    	<meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
    	================================================== -->
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    	================================================== -->
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/zerogrid.css">
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsiveslides.css">
    	<!-- Custom Fonts -->
    	<link href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    	<!-- Owl Carousel Assets -->
    	<link href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.css" rel="stylesheet">
    	<!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/menu.css">
    	<script src="<?php echo get_template_directory_uri();?>/js/jquery183.min.js"></script>
    	<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>

    	<script src="<?php echo get_template_directory_uri();?>/js/jquery-latest.min.js"></script>
    	<script src="<?php echo get_template_directory_uri();?>/js/responsiveslides.min.js"></script>
    	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
		  	auto: true,
		  	pager: false,
		  	nav: true,
		  	speed: 500,
		  	namespace: "callbacks",
		  	before: function () {
		  		$('.events').append("<li>before event fired.</li>");
		  	},
		  	after: function () {
		  		$('.events').append("<li>after event fired.</li>");
		  	}
		  });
		});
	</script>	
	<?php wp_head();?>
</head>

<body class="home-page">
	<div class="wrap-body">
		<header>
			<div class="top-bar">
				<div class="wrap-top zerogrid">
					<div class="row">
						<div class="col-2-3">
							<ul class="list-inline">
								<li class="mail"><span><i class="fa fa-envelope"></i> ContacUs@Gmail.com</span></li>
								<li class="phone"><span><i class="fa fa-phone"></i>(9999) 123 888 7</span></li>
								<li class="clock"><span><i class="fa fa-clock-o"></i>Mon - Sat | 7:00 - 17:00</span></li>
							</ul>
						</div>
						<div class="col-1-3">
							<ul class="list-inline top-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-logo">
				<a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
			</div>
			<div id='cssmenu' >
				<ul>
					<li class="active"><a href='index.html'><span>zFinanBox</span></a></li>
					<li class=' has-sub'><a href='#'><span>Category</span></a>
						<ul>
							<li class='has-sub'><a href='#'><span>Item 1</span></a>
								<ul>
									<li><a href='#'><span>Sub Item</span></a></li>
									<li class='last'><a href='#'><span>Sub Item</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>Item 2</span></a>
								<ul>
									<li><a href='#'><span>Sub Item</span></a></li>
									<li class='last'><a href='#'><span>Sub Item</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href='archive.html'><span>Archive</span></a></li>
					<li><a href='single.html'><span>About</span></a></li>
					<li class='last'><a href='contact.html'><span>Contact</span></a></li>
				</ul>
			</div>