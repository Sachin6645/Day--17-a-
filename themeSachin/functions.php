<?php

wp_enqueue_style('style-1',get_stylesheet_uri());
wp_enqueue_style('style-bootstrap',get_template_directory_uri().'/asstes/css/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/asstes/js/bootstrap.bundle.min.js', array(), '1.0', true );

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

register_nav_menus([
    'TM'=> 'Primary',
    'FM'=> 'Footer'
]);

register_sidebar(array(
    'name'=>'Main Banner',
    'id'=>'mainbanner',
    'before_widget'=>'',
    'after_widget'=>''

));
register_sidebar(array(
    'name'=>'Sidebar Image',
    'id'=>'sideimg',
    'before_widget'=>'',
    'after_widget'=>''

));
register_sidebar(array(
    'name'=>'Sidebar Video',
    'id'=>'sidevideo',
    'before_widget'=>'',
    'after_widget'=>''

));
register_sidebar(array(
    'name'=>'Footer Top',
    'id'=>'footer',
    'before_widget'=>'',
    'after_widget'=>''

));
register_sidebar(array(
    'name'=>'List',
    'id'=>'list',
    'before_widget'=>'',
    'after_widget'=>''

));