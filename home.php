
<?php get_header(); ?>

 <!-- Two column page including sidebar -->

 <div class="container">
  <div class="row bump">
    <div class="col-md-9">
      <div class="boostrap-header">
        <h1><?php wp_title(''); ?></h1>
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </article>
        <?php the_excerpt(); ?>
        <hr>
      <?php endwhile; else: ?>
        <!-- Fallback message if there is no content to display -->
        <p>😟 sorry we didn't add anthing to display here, have some ☕️ ... 😁</p>
    <?php endif ?>
    </div>

    <!-- Calling sidebar content -->
    <?php get_sidebar( 'blog'); ?>
  </div>


<?php get_footer(); ?>
