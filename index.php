<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main portfolio">
  <div class="container">
    <div class="flex">
      <div class="content">
      		<?php 
      		if(have_posts()) while (have_posts()) : the_post();?>
      		  <article class = "blog-post" data-scroll-speed="4">
                  <?php 
                    $portImage = get_field('image');
                    //pre_r($portImage['url']);
                  ?>
            <img src="<?php echo $portImage['url']?>" alt="">
  	    		<a href="<?php the_permalink();?>"><h2 style="color:<?php echo get_field('header_color');?>"><?php the_title(); ?></h2></a>
            <p class="brief"><?php echo get_field('brief') ?></p>
  	    		<p>Posted on <?php echo get_the_date(); ?></p>
  	    		<p>Written by <?php the_author_posts_link(); ?></p>
            <p>Type of Work: <?php the_field('type_of_work') ?></p>         
  	    	</article>

      	<?php endwhile ?>
      </div> <!--/.content -->
      <div class="sidebar">
        <?php  dynamic_sidebar('primary-widget-area'); ?>
      </div>
    </div> <!-- /.container -->
  </div>
</div> <!-- /.main -->

<?php get_footer(); ?>