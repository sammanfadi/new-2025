<?php
function mhtwa_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'mhtwa')
    ]);
}
add_action('after_setup_theme', 'mhtwa_theme_setup');
