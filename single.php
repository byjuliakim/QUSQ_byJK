<?php get_header(); ?>


<div class="main">
  <div class="container blogpost">
    <div class="content" data-scroll-speed="4">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php 
          $portImage = get_field('image');
          //pre_r($portImage['url']);
        ?>
        <div class="image">
          <img src="<?php echo $portImage['url']?>" alt="">
        </div>
        <h4><?php echo get_field('tagline') ?></h4>
        <p><?php echo get_field('content') ?></p>

        <div class="projectInfo">
          <p style="color:<?php echo get_field('header_color');?>">Project Date: <span><?php the_field('date') ?></span></p>
          <p style="color:<?php echo get_field('header_color');?>">Client: <span><?php the_field('client') ?></span></p>
          <p style="color:<?php echo get_field('header_color');?>">Type of Work: <span><?php the_field('type_of_work') ?></span></p>
        </div>
        
        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->



          <div class="entry-utility">
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->


        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
    



    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>