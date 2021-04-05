<?php

//calling css and js files
function css_js(){
    wp_enqueue_style( 'bootstrap_style', get_template_directory_uri(). '/plugins/bootstrap/bootstrap.min.css', null, 'v1.0' );

    wp_enqueue_style( 'ionicons', get_template_directory_uri(). '/plugins/ionicons/ionicons.min.css', null, 'v1.0',  );
    wp_enqueue_style('ion-icons', get_template_directory_uri().'/css/fontawesome-all.min.css', null, 'v1.1' );
    wp_enqueue_style( 'animat', get_template_directory_uri(). '/plugins/animate-css/animate.css');

    wp_enqueue_style( 'slider_cs', get_template_directory_uri(). '/plugins/slider/slider.css');

    wp_enqueue_style( 'owl_carosel', get_template_directory_uri(). '/plugins/owl-carousel/owl.carousel.css');

    wp_enqueue_style( 'owl_caro_theme', get_template_directory_uri(). '/plugins/owl-carousel/owl.theme.css');

    wp_enqueue_style('fancybox', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.css');

    wp_enqueue_style( 'responsive', get_template_directory_uri(). '/css/responsive.css');

    wp_enqueue_style( 'style_css', get_template_directory_uri(). '/css/style.css');
    
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri());

  // js files
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.js', 'jquery', null, 'ture');
  wp_enqueue_script('validate', get_template_directory_uri().'/plugins/form-validation/jquery.validate.min.js', 'jquery', null, 'ture');
  wp_enqueue_script('carousel', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.min.js', 'jquery', null, 'ture');
  wp_enqueue_script('wow', get_template_directory_uri().'/plugins/wow-js/wow.min.js', 'jquery', null, 'ture');
  wp_enqueue_script('slider', get_template_directory_uri().'/plugins/slider/slider.js', 'jquery', null, 'ture');
  wp_enqueue_script('fancybox', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.js', 'jquery', null, 'ture');
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', 'jquery', null, 'ture'); 
  
}
add_action( 'wp_enqueue_scripts', 'css_js' );
//



////

