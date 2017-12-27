<?php

  function register_style() {

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('animate');

    wp_register_style('my_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('my_bootstrap');

    wp_register_style('flickity', get_template_directory_uri() . '/css/flickity.css');
    wp_enqueue_style('flickity');

    wp_register_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_enqueue_style('fancybox');

    wp_register_style('lightbox', get_template_directory_uri() . '/css/lightbox.css');
    wp_enqueue_style('lightbox');

    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');

    wp_register_style('queries', get_template_directory_uri() . '/css/queries.css');
    wp_enqueue_style('queries');

    wp_register_style('fonts',  'https://fonts.googleapis.com/css?family=Nunito:400,300,700');
    wp_enqueue_style('fonts');

    wp_register_style('font-awasome',  'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
    wp_enqueue_style('font-awasome');
  }

add_action( 'wp_enqueue_scripts', 'register_style' );


function register_script() {

  wp_deregister_script( 'jquery' );
  	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
  	wp_enqueue_script( 'jquery' );

  wp_register_script('modernizr_custom', get_template_directory_uri() . '/js/modernizr.custom.js');
  wp_enqueue_script('modernizr_custom');

  wp_register_script('my_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('my_bootstrap');

  wp_register_script('flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js');
  wp_enqueue_script('flickity');

  wp_register_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js');
  wp_enqueue_script('fancybox');

  wp_register_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js');
  wp_enqueue_script('fitvids');

  wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js');
  wp_enqueue_script('modernizr');

  wp_register_script('retina', get_template_directory_uri() . '/js/retina.js');
  wp_enqueue_script('retina');

  wp_register_script('script', get_template_directory_uri() . '/js/scripts.js');
  wp_enqueue_script('script');

  wp_register_script('toucheffects', get_template_directory_uri() . '/js/toucheffects.js');
  wp_enqueue_script('toucheffects');

  wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js');
  wp_enqueue_script('waypoints');

  wp_register_script('script_min', get_template_directory_uri() . '/js/min/scripts-min.js');
  wp_enqueue_script('script_min');

  wp_register_script('toucheffects', get_template_directory_uri() . '/js/min/toucheffects-min.js');
  wp_enqueue_script('toucheffects');

}

add_action( 'wp_enqueue_scripts', 'register_script' );
