<?php
  function mycss(){
    wp_enqueue_style('styles', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
  }
  add_action('wp_enqueue_scripts', 'mycss');

  function mycss_js_script(){
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/js/bootstrap.min.js" , array('jquery'), '', true);
  }
  add_action('wp_enqueue_script', 'mycss_js_script');

  function create_widget($name, $id, $description){
    register_sidebar(array(
      'name' => $name,
      'id' => $id,
      'description' => $description,
    ));
  }

  create_widget('Front Left Block', 'front-left-block', 'This block is on the front left side of the page');
  create_widget('Front Right Block', 'front-right-block', 'This block is on the front right side of the page');
 ?>
