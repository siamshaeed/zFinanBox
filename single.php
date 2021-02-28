	<?php get_header();?>
		</header>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container zerogrid">
				<div class="crumbs">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="single.html">Single</a></li>
					</ul>
				</div>
				<div id="main-content" class="col-2-3">
					<div class="wrap-content">
						<?php while (have_posts()) : the_post();?>
							
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
							
						<?php endwhile; ?>

						
					</div>
				</div>
				<div id="sidebar" class="col-1-3">
					<div class="wrap-sidebar">
						<!---- Start Widget ---->
						<div class="widget wid-about">
							<div class="wid-header">
								<h5>About Us</h5>
							</div>
							<div class="wid-content">
								<img src="images/8.jpg"/>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
							</div>
						</div>
						<!---- Start Widget ---->
						<div class="widget wid-tag">
							<div class="wid-header">
								<h5>Tags</h5>
							</div>
							<div class="wid-content">
								<a href="#">animals</a>
								<a href="#">cooking</a>
								<a href="#">countries</a>
								<a href="#">home</a>
								<a href="#">likes</a>
								<a href="#">photo</a>
								<a href="#">travel</a>
								<a href="#">video</a>
							</div>
						</div>
						<!---- Start Widget ---->
						<div class="widget wid-gallery">
							<div class="wid-header">
								<h5>Gallery</h5>
							</div>
							<div class="wid-content">
								<a href="#"><img src="images/1.jpg"></a>
								<a href="#"><img src="images/2.jpg"></a>
								<a href="#"><img src="images/3.jpg"></a>
								<a href="#"><img src="images/8.jpg"></a>
								<a href="#"><img src="images/9.jpg"></a>
								<a href="#"><img src="images/1.jpg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<?php get_footer( );?>