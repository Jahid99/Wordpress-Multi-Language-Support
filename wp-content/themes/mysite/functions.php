<?php

function arphabet_widgets_init() {

    register_sidebar( array(
      'name'          => __( 'Posts', 'theme-slug' ),
      'id'            => 'all_post',
      'description'   => __( 'Only For Posts ' ),
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    ) );

    register_sidebar( array(
      'name'          => __( 'Language Switcher', 'theme-slug' ),
      'id'            => 'languae_switcher',
      'description'   => __( 'For Language Switcher Options ' ),
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    ) );
   
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
