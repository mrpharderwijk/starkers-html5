<?php
function widgets_init() {

  // Angular Widget Area
  register_sidebar( array(
    'name' => __( 'Angular Widget Area', 'starkers' ),
    'id' => 'angular-widget-area',
    'description' => __( 'The angular widget area', 'starkers' ),
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );

  // Area 1, located at the top of the sidebar.
  register_sidebar( array(
    'name' => __( 'Page Sidebar Widget Area', 'starkers' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The sidebar widget area', 'starkers' ),
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );

  // Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
  register_sidebar( array(
    'name' => __( 'Secondary Widget Area', 'starkers' ),
    'id' => 'secondary-widget-area',
    'description' => __( 'The secondary widget area', 'starkers' ),
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );

  // Area 3, located in the footer. Empty by default.
  register_sidebar( array(
    'name' => __( 'First Footer Widget Area', 'starkers' ),
    'id' => 'first-footer-widget-area',
    'description' => __( 'The first footer widget area', 'starkers' ),
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );

  // Area 4, located in the footer. Empty by default.
  register_sidebar( array(
    'name' => __( 'Second Footer Widget Area', 'starkers' ),
    'id' => 'second-footer-widget-area',
    'description' => __( 'The second footer widget area', 'starkers' ),
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );

  // Area 5, located in the footer. Empty by default.
  register_sidebar( array(
    'name' => __( 'Third Footer Widget Area', 'starkers' ),
    'id' => 'third-footer-widget-area',
    'description' => __( 'The third footer widget area', 'starkers' ),
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );

  // Area 6, located in the footer. Empty by default.
  register_sidebar( array(
    'name' => __( 'Fourth Footer Widget Area', 'starkers' ),
    'id' => 'fourth-footer-widget-area',
    'description' => __( 'The fourth footer widget area', 'starkers' ),
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}