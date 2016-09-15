<?php
/**
 *    Starkers functions
 **/
require_once('external/starkers-functions.php');

/**
 *    ACF Settings pages
 **/
require_once('external/acf-settings.php');

/**
 *    Enqueue Scripts
 **/
// require_once('external/enqueue-scripts.php');

/** 
 *    Bootstrap Navwalker
 **/
require_once('external/bootstrap-navwalker.php');
register_nav_menus(array('primary' => __('Primary Menu', 'hotelenroute')));

/**
 *    Widget area's
 **/
require_once('external/widget-areas.php');
add_action('widgets_init', 'widgets_init');
