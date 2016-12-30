
<?php get_header(); ?>

 <!-- Two column page including sidebar -->
 
 <div class="container">
  <div class="row bump">

    <!--  Left hand main content -->
    <div class="col-md-9">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="boostrap-header">
          <h1><?php the_title(); ?></h1>
        </div>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <!-- Fallback message if there is no content to display -->
        <p>😟 sorry we didn't add anthing to display here, have some ☕️ ... 😁</p>
    <?php endif ?>
    </div>

    <!--  Right hand sidebar content -->
    <?php get_sidebar(); ?>
  </div>


<?php get_footer(); ?>
