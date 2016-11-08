<footer>
	<div class="slant">

	</div>
    <div class="container">
		<?php 
		   $custom_logo_id = get_theme_mod( 'custom_logo' );
		   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		      ?>
		<img src="<?php echo $image[0]; ?>" alt="">
		<h4 class='blogName'>
		  <?php bloginfo('name'); ?>
		</h4>
		<ul>
	    	<li class="social"><a href="<?php the_field('dribbble', 'option') ?>"><i class = "fa fa-dribbble" aria-hidden="true"></i></a></li>
	    	<li class="social"><a href="<?php the_field('facebook', 'option') ?>"><i class = "fa fa-facebook" aria-hidden="true"></i></a></li>
	    	<li class="social"><a href="<?php the_field('instagram', 'option') ?>"><i class = "fa fa-instagram" aria-hidden="true"></i></a></li>
	    	<li class="social"><a href="<?php the_field('behance', 'option') ?>"><i class = "fa fa-behance" aria-hidden="true"></i></a></li>
	    	<li class="social"><a href="<?php the_field('google-plus', 'option') ?>"><i class = "fa fa-google-plus" aria-hidden="true"></i></a></li>
	    	<li class="social"><a href="<?php the_field('twitter', 'option') ?>"><i class = "fa fa-twitter" aria-hidden="true"></i></a></li>
	    </ul>
	    <div class="reference">	
		    <p> QUSQ_byJK Theme</p>
		    <p> Designed by <a href="http://ishyoboy.com/">IshYoBoy.com</a></p>
		    <p> Proudly Powered by <a href="http://wordpress.org">WordPress</a></p>
		    
	    </div>
	    <p class=copyright>&copy; <a href="http://byjuliakim.com">byJuliaKim</a> <?php echo date('Y'); ?></p>
   		<a class = "goTop" href="#top"> <p>Back to Top</p> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>