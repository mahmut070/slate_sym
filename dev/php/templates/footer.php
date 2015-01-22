	<div class="Footer">
		<div class="u-gridContainer">

			<div class="footer-druppel">
					<a id="backToTop"  href="#"><img class="footer-druppel-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/druppel.png"/></a>
			</div>
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner u-gridRow">
				 <div class="u-gridCol4">
				 	<a href="/home"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/></a>
               		<p>Email: info@symschoonmaak.nl </p>
					<p>Tel: 0346 24 37 99</p>
                </div>
                <div class="u-gridCol4">
					<h4 class=" widgettitle">Contact</h4>
					<p>Sym schoonmaakbedrijf</p>
					<p>Floraweg 6</p>
					<p>3608 BW Maarssen</p>
                </div>
                <div class="u-gridCol4">
				 	<?php dynamic_sidebar( 'footer-widgets' ); ?>
                </div>

			</div>
			<?php endif; ?>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a class="footer-link" href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/smooth-scroll.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script> 
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ga.js"></script> 
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
