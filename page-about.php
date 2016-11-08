<?php get_header();  ?>
<style>
  li{
    color:rgb(81,81,81);
  }
  li:hover{
    color:<?php the_field('header_color');?>;
  }
</style>
<div class="main">
  <div class="container">
    <div class="content about">
      
      <div class="left">
        <?php 
          $aboutImage = get_field('image');
          //pre_r($aboutImage['url']);
        ?>
        <img class="aboutImage" src="<?php echo $aboutImage['url']?>" alt="">
    </div>
    <div class="right">
        <h4 style="color:<?php the_field('header_color');?>"><?php the_field('name') ?></h4>
        <p><?php the_field('blob') ?></p>
        <ul>
          <li class="social" ><a href="<?php the_field('twitter') ?>"><i class = "fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="social" ><a href="<?php the_field('facebook') ?>"><i class = "fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="social"><a href="<?php the_field('google-plus') ?>"><i class = "fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
    </div>

    </div> <!-- /,content -->

    <?php //dynamic_sidebar('primary-widget-area'); ?>
    
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
<a href=""></a>