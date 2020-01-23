<?php 

function load_stylesheets() {


  wp_register_style('animate_css', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all');
  wp_enqueue_style('animate_css');

  wp_register_style('icomoon_css', get_template_directory_uri() . '/css/icomoon.css', array(), 1, 'all');
  wp_enqueue_style('icomoon_css');

  wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
  wp_enqueue_style('bootstrap_css');

  wp_register_style('superfish_css', get_template_directory_uri() . '/css/superfish.css', array(), 1, 'all');
  wp_enqueue_style('superfish_css');

  wp_register_style('magnificpopup_css', get_template_directory_uri() . '/css/magnific-popup.css', array(), 1, 'all');
  wp_enqueue_style('magnificpopup_css');

  wp_register_style('datepicker_css', get_template_directory_uri() . '/css/bootstrap-datepicker.min.css', array(), 1, 'all');
  wp_enqueue_style('datepicker_css');

  wp_register_style('csselect_css', get_template_directory_uri() . '/css/cs-select.css', array(), 1, 'all');
  wp_enqueue_style('csselect_css');

  wp_register_style('skinborder_css', get_template_directory_uri() . '/css/cs-skin-border.css', array(), 1, 'all');
  wp_enqueue_style('skinborder_css');

  wp_register_style('style_css', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
  wp_enqueue_style('style_css');

  wp_enqueue_style('style', get_template_directory_uri());

  wp_register_style('custom_css', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
  wp_enqueue_style('custom_css');

  wp_register_script('modernizr_js', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), 1, 1, 1);
  wp_enqueue_script('modernizr_js');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');



function load_js() {

  wp_register_script('jquery_js', get_template_directory_uri() . '/js/jquery.min.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery_js');

  wp_register_script('jquery_easing_js', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery_easing_js');

  wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1, 1);
  wp_enqueue_script('bootstrap_js');

  wp_register_script('jquery_waypoint_js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery_waypoint_js');

  wp_register_script('sticky_js', get_template_directory_uri() . '/js/sticky.js', array(), 1, 1, 1);
  wp_enqueue_script('sticky_js');

  wp_register_script('jquery_stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery_stellar');

  wp_register_script('hoverIntent_js', get_template_directory_uri() . '/js/hoverIntent.js', array(), 1, 1, 1);
  wp_enqueue_script('hoverIntent_js');

  wp_register_script('superfish_js', get_template_directory_uri() . '/js/superfish.js', array(), 1, 1, 1);
  wp_enqueue_script('superfish_js');

  wp_register_script('jquery_magnificpopup_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery_magnificpopup_js');

  wp_register_script('magnific_popup_options_js', get_template_directory_uri() . '/js/magnific-popup-options.js', array(), 1, 1, 1);
  wp_enqueue_script('magnific_popup_options_js');

  wp_register_script('bootsrap_datepicker_js', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array(), 1, 1, 1);
  wp_enqueue_script('bootsrap_datepicker_js');

  wp_register_script('classie_js', get_template_directory_uri() . '/js/classie.js', array(), 1, 1, 1);
  wp_enqueue_script('classie_js');

  wp_register_script('selectFs_js', get_template_directory_uri() . '/js/selectFx.js', array(), 1, 1, 1);
  wp_enqueue_script('selectFs_js');

  wp_register_script('main_js', get_template_directory_uri() . '/js/main.js', array(), 1, 1, 1);
  wp_enqueue_script('main_js');

}

add_action('wp_enqueue_scripts', 'load_js');






