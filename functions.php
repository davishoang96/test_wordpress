<?php
  function mycss(){
    wp_enqueue_style('styles', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
  }
  add_action('wp_enqueue_scripts', 'mycss');

  function mycss_js_script(){
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/js/bootstrap.min.js" , array('jquery'), '', true);
  }
  add_action('wp_enqueue_scripts', 'mycss_js_script');

  function main_jquery(){
    wp_enqueue_script('main_jquery', get_template_directory_uri() . "/js/jquery-2.2.3.min.js" , array('jquery'), '', true);
  }
  add_action('wp_enqueue_scripts', 'main_jquery');

  function create_widget($name, $id, $description){
    register_sidebar(array(
      'name' => $name,
      'id' => $id,
      'description' => $description,
    ));
  }

  #//////////////////////////////////////////
  function stellar_js(){
    wp_enqueue_script('stellar_js', get_template_directory_uri() . "/js/jquery.stellar.min.js", array('jquery'), '', true);
  }
  add_action("wp_footer", 'stellar_js');

  function activate_stellar(){
    wp_enqueue_script('activateStellar_js', get_template_directory_uri() . "/js/activate_stellar.js", array('jquery'), '', true);
  }
  add_action("wp_footer", 'activate_stellar');
  #//////////////////////////////////////////

  function css3_animate(){
    wp_enqueue_style('css3Animate', get_template_directory_uri() . "/css/animations.css");
  }
  add_action("wp_enqueue_scripts", 'css3_animate');

  function css3_animate_js(){
    wp_enqueue_script('css3_animate_js', get_template_directory_uri() . "/js/css3-animate-it.js", array('jquery'), '', true);
  }
  add_action("wp_enqueue_scripts", 'css3_animate_js');

  create_widget('Front Left Block', 'front-left-block', 'This block is on the front left side of the page');
  create_widget('Front Right Block', 'front-right-block', 'This block is on the front right side of the page');
 ?>
