<?php 
/**
 *    Options Pages
 **/
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Homepage Settings',
    'menu_title'  => 'Homepage Settings',
    'menu_slug'   => 'homepage-settings'
  ));
}