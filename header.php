<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="HotelEnroute">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/app/build/libs/bootstrap-slider.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/app/build/libs/font-awesome.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/app/build/assets/css/strapless/strapless.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>

<script src="<?php bloginfo( 'template_url' ); ?>/app/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
 
<body id="l-body" <?php body_class(); ?>>

  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MW7XRM"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MW7XRM');</script>
 
  <header id="m-nav-main" class="<?php echo (is_home()) ? 'page-home' : ''; ?>">
    <nav>
      <a href="<?php bloginfo('url'); ?>" class="m-nav-branding">
        <div class="branding-logo">
          <i class="icon icon-map-marker large"></i>
          <i class="icon icon-map-marker small"></i>
        </div>
        <span class="branding-text">Hotelenroute</span>
      </a><!--// m-nav-branding -->

      <?php
        wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'container'         => '',
          'depth'             => 2,
          'menu_class'        => 'm-main-menu',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
        );
      ?>
    </nav>
  </header>