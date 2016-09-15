<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<section id="l-page" class="m-page-single">

  <header id="featured-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="container">
      <?php if ( is_front_page() ) { ?>
        <h2><?php the_title(); ?></h2>
      <?php } else { ?> 
        <h1><?php the_title(); ?></h1>
      <?php } ?>
    </div>
  </header>

  <div class="container">
    <div class="row">
      
      <div class="col-sm-9">
        <?php get_template_part( 'loop', 'page' ); ?>
      </div>


      <aside class="col-sm-3">
        <?php get_sidebar(); ?>
      </aside>

    </div>
  </div>

</section>

<?php get_footer(); ?>
