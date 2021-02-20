<footer>
			<div class="top-footer">
				<div id="owl-brand" class="owl-carousel">
					<div class="item">
						<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/images/15.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/images/16.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/images/17.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/images/18.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/images/19.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/images/20.jpg" /></a>
					</div>
					<div class="item">
						<a href="single.html"><img src="<?php echo get_template_directory_uri();?>/images/21.jpg" /></a>
					</div>
				</div>
			</div>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-4 col-footer-1">
						<div class="wrap-col">
							<h3 class="widget-title">About Us</h3>
							<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Condimentum fermentum gravida, metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">Recent Post</h3>
							<ul>
								<li><a href="#">MOST VISITED COUNTRIES</a></li>
								<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
								<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
								<li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
							<h3 class="widget-title">Tag Cloud</h3>
							<a href="#">animals</a>
							<a href="#">cooking</a>
							<a href="#">countries</a>
							<a href="#">city</a>
							<a href="#">children</a>
							<a href="#">home</a>
							<a href="#">likes</a>
							<a href="#">photo</a>
							<a href="#">link</a>
							<a href="#">law</a>
							<a href="#">shopping</a>
							<a href="#">skate</a>
							<a href="#">scholl</a>
							<a href="#">video</a>
							<a href="#">travel</a>
							<a href="#">images</a>
							<a href="#">love</a>
							<a href="#">lists</a>
							<a href="#">makeup</a>
							<a href="#">media</a>
							<a href="#">password</a>
							<a href="#">pagination</a>
							<a href="#">wildlife</a>
						</div>
					</div>
					<div class="col-1-4 col-footer-4">
						<div class="wrap-col">
							<h3 class="widget-title">Subcribe</h3>
							<p>Never missed any post published in our site. Subscribe to our daly newsletter now.</p>
							<p>Email address:</p>
							<form action="#" method="post">
								<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
								<input type="submit" value="SUBSCRIBE" class="button button-subcribe" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="zerogrid wrapper">
					Copyright @ zFinanBox - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
					<ul class="quick-link">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-brand").owlCarousel({
				autoPlay: 3000,
				items : 6,
				itemsDesktop : [1199,4],
				itemsDesktopSmall : [979,2],
				navigation: true,
				navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
				pagination: false
			});
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>