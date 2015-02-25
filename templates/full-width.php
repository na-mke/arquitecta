<?php

/*
 * Template Name: Full Width (no sidebar)
 */

get_header(); ?>

<div class="content-block">
  <div class="row">
    <div class="column columns small-12" role="content">

  	<?php if ( have_posts() ) : ?>

  		<?php while ( have_posts() ) : the_post(); ?>
  			<?php get_template_part( 'content', 'page' ); ?>
  		<?php endwhile; ?>
  		
  	<?php endif; ?>

    </div><!--.columns-->
  </div><!--.row-->
</div><!--.content-block-->
<?php get_footer(); ?>