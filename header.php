<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Raleway|Varela+Round" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php if ( is_404()) : ?>
<header id = "top" style="background:<?php echo get_field('header_color', 'option');?>">
<?php else :?>
<header id = "top" style="background:<?php echo get_field('header_color');?>">
<?php endif; ?>
  <section class="header">
    <div class="container clearfix">
      <aside class="sideTitle">
        <?php 
           $custom_logo_id = get_theme_mod( 'custom_logo' );
           $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              ?>
           <img src="<?php echo $image[0]; ?>" alt="">
           <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <p class='blogName'>
              <?php bloginfo('name'); ?>
            </p>
           </a>
      </aside>
      <div class="mainHeader">
         
         <?php if ( is_blog()) : ?>
            <h1><?php the_field('title_header', get_option('page_for_posts')); ?></h1>
            <h2><?php the_field('subtitle_header', get_option('page_for_posts')); ?></h2>
            <h4><?php the_field('tagline_header', get_option('page_for_posts')); ?></h4>
          <?php elseif ( is_404()) : ?>
            <h1><?php the_field('title_header', 'option'); ?></h1>
            <h2><?php the_field('subtitle_header', 'option'); ?></h2>
            <h4><?php the_field('tagline_header', 'option'); ?></h4>
           <?php else :?>
               <h1><?php the_field('title_header'); ?></h1>
               <h2><?php echo get_field('subtitle_header'); ?></h2>
               <h4><?php echo get_field('tagline_header'); ?></h4>
         <?php endif; ?>
      </div>
      
    </div> <!-- /.container -->
    <?php if ( is_404()) : ?>
    <div class = "slant" style="background:<?php echo get_field('header_color', 'option');?>">
    <?php else :?>
    <div class = "slant" style="background:<?php echo get_field('header_color');?>">
    <?php endif; ?>
      
    </div>
  </section>
  <section class="slide-menu">

      <div class="slant">
         <p class="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i>Menu</p>
         <p class = "close"><i class="fa fa-times" aria-hidden="true"></i>Close</p>
      </div>
    <div class="wrapper">
      <div class="name">
        <img src="<?php echo $image[0]; ?>" alt="">
        <p><?php bloginfo( 'name' ); ?></p>
      </div>
      
        <?php dynamic_sidebar('hamburger'); ?>
      
      <ul class="socialBox">
        <li class="social"><a href="<?php the_field('dribbble', 'option') ?>"><i class = "fa fa-dribbble" aria-hidden="true"></i></a></li>
        <li class="social"><a href="<?php the_field('facebook', 'option') ?>"><i class = "fa fa-facebook" aria-hidden="true"></i></a></li>
        <li class="social"><a href="<?php the_field('instagram', 'option') ?>"><i class = "fa fa-instagram" aria-hidden="true"></i></a></li>
        <li class="social"><a href="<?php the_field('behance', 'option') ?>"><i class = "fa fa-behance" aria-hidden="true"></i></a></li>
        <li class="social"><a href="<?php the_field('google-plus', 'option') ?>"><i class = "fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li class="social"><a href="<?php the_field('twitter', 'option') ?>"><i class = "fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div> 
  </section>
</header><!--/.header-->

