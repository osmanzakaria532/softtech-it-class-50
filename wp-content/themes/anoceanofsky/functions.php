<?php 





add_action('after_setup_theme', 'basic_function');

function basic_function(){

    add_theme_support('title-tag');

    add_theme_support('custom-background', array(
        'default-image' => get_template_directory_uri().'/images/background.png',
    ));

    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri().'/images/anoceanofsky.jpg',
    ));

}



add_action('wp_enqueue_scripts', 'basic_theme_style');

function basic_theme_style(){

    // wp_enqueue_style('', 'folderName/style.css', '', '');

    wp_enqueue_style('style', get_stylesheet_uri());
}

?>