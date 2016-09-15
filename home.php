<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Hotelenroute
 * @since Hotelenroute 1.0
 */
 
///////// AFC variables
$hero_background = get_field( 'hero_background_image', 'option' );
$hero_title = get_field( 'hero_title', 'option' );
$hero_subtitle = get_field( 'hero_subtitle', 'option' );
$hero_button_text = get_field( 'hero_button_text', 'option' );
$hero_button_href = get_field( 'hero_button_href', 'option' );

get_header(); ?>

<section id="l-page">
  <?php
  /**
   *      CONTAINER Hero
   **/ ?>
  <section class="m-hero-home">
    <div class="m-hero-background" style="background-image: url(<?php echo $hero_background['url']; ?>);"></div>
    <div class="m-hero-overlay"></div>

    <div class="m-hero-content">

      <div class="m-hero-container">
        <div class="m-hero-inlay">
          <h1><?php echo ($hero_title) ? $hero_title : 'No title given'; ?></h1>
          <h2><?php echo ($hero_subtitle) ? $hero_subtitle : 'No subtitle given'; ?></h2>

          <?php if (!empty($hero_button_text) && !empty($hero_button_href)) : ?>
            <a href="<?php echo ($hero_button_href) ? $hero_button_href : '#'; ?>" class="btn btn-large btn-hero"><?php echo ($hero_button_text) ? $hero_button_text : 'No buttontext given'; ?></a>
          <?php endif; ?>
        </div>
      </div><!--// m-hero-container -->

      <!-- <route-select type="minimal"></route-select> -->

    </div><!--// m-hero-content -->
  </section> <!--// m-hero-home -->




  <?php
  /**
   *      CONTAINER Features/Spotlight
   **/ ?>
  <section class="container m-content-container">
    <?php
    /**
     *    FEATURES LOOP
     */
    if( have_rows('features', 'option') ) :
      
      // Set the index
      $index = 1;
      $oddClass = 'col-xs-6 pull-right';
      $evenClass = 'col-xs-6 pull-left';

      // Go loop!
      while ( have_rows('features', 'option') ) : the_row(); ?>
        <div class="row m-content-row">
          <div class="<?php echo ($index % 2) ? $evenClass : $oddClass; ?>">
            <img class="img-responsive" src="<?php echo get_sub_field('img')['url']; ?>">
          </div>
          <div class="<?php echo ($index % 2) ? $evenClass : $oddClass; ?>">
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('excerpt'); ?></p>
            <div><?php /* the_sub_field('content'); */ ?></div>
          </div>
        </div>
      <?php 
      ++$index; if ($index > 2) { break; }
      endwhile; 
    endif; ?>





    <?php
    /**
     *    SPOTLIGHT LOOP
     */
    if( have_rows('spotlight', 'option') ) : ?>
      <div class="row m-content-row">
        <?php while ( have_rows('spotlight', 'option') ) : the_row(); ?>
          <div class="col-xs-3">
            <img class="img-responsive" src="<?php echo get_sub_field('img')['url']; ?>">
            <h2><?php the_sub_field('title'); ?></h2>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>





    <?php
    /**
     *    FEATURES LOOP
     */
    if( have_rows('features', 'option') ) :
      
      // Set the index
      $index = 1;
      $oddClass = 'col-xs-6 pull-right';
      $evenClass = 'col-xs-6 pull-left';

      // Go loop!
      while ( have_rows('features', 'option') ) : the_row(); ?>
        <div class="row m-content-row">
          <div class="<?php echo ($index % 2) ? $evenClass : $oddClass; ?>">
            <img class="img-responsive" src="<?php echo get_sub_field('img')['url']; ?>">
          </div>
          <div class="<?php echo ($index % 2) ? $evenClass : $oddClass; ?>">
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('excerpt'); ?></p>
            <div><?php /* the_sub_field('content'); */ ?></div>
          </div>
        </div>
      <?php ++$index; endwhile; ?>
    <?php endif; ?>
  </section>

</section><!-- #l-page -->

<?php get_footer(); ?>