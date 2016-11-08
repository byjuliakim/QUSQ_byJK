<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content contact">
      <?php // Start the loop ?>
       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="left">
        <h5 style="color:<?php echo get_field('header_color');?>"><?php echo get_field('tagline') ?></h5>
        <div class="contactInfo">
          <p><?php echo get_field('address') ?></p>
          <i class="fa fa-home" aria-hidden="true" style="color:<?php echo get_field('header_color');?>"></i>
        </div>
        <div class="contactInfo">
          <p><?php echo get_field('phone') ?></p>
          <i class="fa fa-phone" aria-hidden="true" style="color:<?php echo get_field('header_color');?>"></i>
        </div>
        <div class="contactInfo">
          <p><?php echo get_field('email') ?></p>
          <i class="fa fa-envelope-o" aria-hidden="true" style="color:<?php echo get_field('header_color');?>"></i>
        </div>
    </div>
    <div class="right">
        <h3>Send a Message</h3>
        <div class="contact-form">
          <?php the_content(); ?>
        </div>
    </div>
      
     <?php endwhile; // end of the loop. ?>
    </div> <!-- /,content -->

    <?php //dynamic_sidebar('primary-widget-area'); ?>
    
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
<a href=""></a>