<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		
		<?php the_content(); ?>
        

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php //dynamic_sidebar('primary-widget-area'); ?>
    
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
<a href=""></a>