<!-- connect header file -->
<?php get_header(); ?>
<div class="slider">
	<!-- Slideshow -->
	<div class="callbacks_container">
		<ul class="rslides" id="slider">

			<?php 
				$slider = new WP_Query(array('post_type'=>'zfinanbox'));
				while($slider->have_posts()){
					$slider->the_post();
			 ?>	

			<li>
				<?php the_post_thumbnail() ?>
				<div class="caption">
					<h1>SED UT PERSPICIATEIS UNDE OMNIS</h1>
					<span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br> sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, <br>sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum</span>
				</div>
			</li>

		<?php } ?>

		</ul>
	</div>
	<div class="clear"></div>
</div>
</header>
<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="box-item">
								<img src="<?php echo get_template_directory_uri();?>/images/1.jpg">
								<h2>Text Heading</h2>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et</p>
								<a href="single.html">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="box-item">
								<img src="<?php echo get_template_directory_uri();?>/images/2.jpg">
								<h2>Text Heading</h2>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et</p>
								<a href="single.html">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="box-item">
								<img src="<?php echo get_template_directory_uri();?>/images/3.jpg">
								<h2>Text Heading</h2>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et</p>
								<a href="single.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box boxstyle-1 box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="box-item">
						<blockquote><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p></blockquote>
					</div>
				</div>
			</div>
		</section>
		<!-----------------content-box-3-------------------->
		<section class="content-box box-3">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<div class="wrapper">
							<h2>COURSES</h2>
							<hr class="line">
							<div class="intro">Explore all the</div>
						</div>
					</div>
					<div class="row">
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="box-item">
									<div class="zoom-container">
										<img src="<?php echo get_template_directory_uri();?>/images/feature-icon-1.png" />
									</div>
									<div class="box-item-content">
										<h3>BASIC FURNITURE</h3>
										<p>We have step by step tutorials & instructions</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="box-item">
									<div class="zoom-container">
										<img src="<?php echo get_template_directory_uri();?>/images/feature-icon-2.png" />
									</div>
									<div class="box-item-content">
										<h3>BASIC FURNITURE</h3>
										<p>We have step by step tutorials & instructions</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="box-item">
									<div class="zoom-container">
										<img src="<?php echo get_template_directory_uri();?>/images/feature-icon-3.png" />
									</div>
									<div class="box-item-content">
										<h3>BASIC FURNITURE</h3>
										<p>We have step by step tutorials & instructions</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col">
								<div class="box-item">
									<div class="zoom-container">
										<img src="<?php echo get_template_directory_uri();?>/images/feature-icon-4.png" />
									</div>
									<div class="box-item-content">
										<h3>BASIC FURNITURE</h3>
										<p>We have step by step tutorials & instructions</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-----------------content-box-4-------------------->
		<section class="content-box boxstyle-2 box-4">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<div class="wrapper">
							<h2>BLOG</h2>
							<hr class="line">
							<div class="intro">Explore all the</div>
						</div>
					</div>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<div class="zoom-container">
										<img src="<?php echo get_template_directory_uri();?>/images/1.jpg" />
									</div>
									<div class="box-item-content">
										<h4>LOREM IPSUM DOLOR</h4>
										<p>His primis omittam intellegat cu, voluptua appetere mea ad, eu harum oporteat vix. Et vel quod legimus, graeci electram ocurrere.</p>
										<a href="single.html">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<div class="zoom-container">
										<img src="<?php echo get_template_directory_uri();?>/images/2.jpg" />
									</div>
									<div class="box-item-content">
										<h4>LOREM IPSUM DOLOR</h4>
										<p>His primis omittam intellegat cu, voluptua appetere mea ad, eu harum oporteat vix. Et vel quod legimus, graeci electram ocurrere.</p>
										<a href="single.html">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<div class="zoom-container">
										<img src="<?php echo get_template_directory_uri();?>/images/3.jpg" />
									</div>
									<div class="box-item-content">
										<h4>LOREM IPSUM DOLOR</h4>
										<p>His primis omittam intellegat cu, voluptua appetere mea ad, eu harum oporteat vix. Et vel quod legimus, graeci electram ocurrere.</p>
										<a href="single.html">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-----------------content-box-6-------------------->
		<section class="content-box box-6">
			<div class="zerogrid" style="width: 100%;">
				<div class="row wrap-box"><!--Start Box-->
					<div class="col-1-2">
						<div class="portfolio-box">
							<img src="<?php echo get_template_directory_uri();?>/images/8.jpg" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-name">
										<a href="single.html">Project Name</a>
									</div>
									<div class="project-des">
										<p>Suspendisse eu ligula. Sed consequat, leo eget bibendum sodales.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-2">
						<div class="portfolio-box">
							<img src="<?php echo get_template_directory_uri();?>/images/9.jpg" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-name">
										<a href="single.html">Project Name</a>
									</div>
									<div class="project-des">
										<p>Suspendisse eu ligula. Sed consequat, leo eget bibendum sodales.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</section>
<!-- connect footer file -->
<?php get_footer(); ?>

