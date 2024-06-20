<?php

    function university_files() {
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); //linking 2nd css file
        wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css')); //linking css file
        wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css')); //linking 2nd css file
    }

    add_action('wp_enqueue_scripts', 'university_files');
?>