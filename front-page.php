
<?php get_header(); ?>

<!-- Jumbotron -->
<div class="jumbotron">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</div>

<!-- Row with three columns -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
    </div>
    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
   </div>
    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
    </div>
  </div>


<?php get_footer(); ?>
