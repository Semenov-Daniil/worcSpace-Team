<?php

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

function add_scripts_and_styles() {
    wp_enqueue_script('vue', "https://unpkg.com/vue@3/dist/vue.global.js", false, null, true);
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', ['vue'], null, true);
    
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', false, null, false);
}