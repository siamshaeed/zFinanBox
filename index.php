<!-- connect header file -->
<?php get_header(); ?>
<div class="slider">
	<!-- Slideshow -->
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<!-- slider add -->
			<?php 
			$slider = new WP_Query(array('post_type'=>'zfinanbox'));
			while($slider->have_posts()){
				$slider->the_post();
				?>	
				<li>
					<?php the_post_thumbnail() ?>
					<div class="caption">
						<h1> <?php the_title(); ?> </h1>
						<span><?php the_content(); ?></span>
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
		<section class="content-box boxstyle-2 box-4" id="myblog">
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

						<?php 
						$args = array(
							'post_type'=>'post',
							'posts_per_page'=>3
						);
						$query=new WP_Query($args);
						while ($query->have_posts()) : $query->the_post();?>
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="box-item">
										<div class="zoom-container">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="box-item-content">
											<p><?php the_author(); ?> | <?php the_time('d F, Y | g:i a'); ?></p>
											<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
											<p><?php read_more(); ?></p>
											<button><a href="<?php the_permalink(); ?>" style="padding: 10px">Read More</a></button>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>

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

