<?php
 /*
   Template Name: Fullwidth Page
*/
 ?>
<?php get_header(); ?>

<!-- Begin Full page content -->
 <div class="container">
  <div class="row bump">
    <div class="col-md-12">

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

  </div>

<?php get_footer(); ?>
