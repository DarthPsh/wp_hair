<?php
function hair_scripts()
{
  // Load css
  wp_enqueue_style( 'hair-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_enqueue_style('hair_main-styles', THEME_DIR_URI . '/assets/css/index.css', false, _S_VERSION);
  wp_enqueue_style( 'google-fonts-montserrat-alternates', 'https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&display=swap');
  wp_enqueue_style( 'google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  wp_enqueue_style( 'google-fonts-cormorant', 'https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap');
  wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, null);

  // Load js
  wp_enqueue_script('masked-input-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js', array('jquery'), null, true);
  wp_enqueue_script('hair_script-js', THEME_DIR_URI . '/assets/js/script.js', array('jquery'), _S_VERSION, true);

  // WOW.js
  wp_enqueue_script('wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array('jquery'), null, true);

  // Инициализация WOW.js
  wp_add_inline_script('wow-js', 'new WOW().init();');

  wp_style_add_data('hair-style', 'rtl', 'replace');

  wp_enqueue_script('hair-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

  if ( is_singular() && comments_open() && get_option('thread_comments') ) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'hair_scripts');

// include custom jQuery
function hair_include_custom_jquery() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'hair_include_custom_jquery');

