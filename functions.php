<?php

    function university_files() {
        wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);         wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); //linking 2nd css file
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); //social media icons
        wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css')); //linking css file
        wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css')); //linking 2nd css file
    }

    add_action('wp_enqueue_scripts', 'university_files');

    function university_features() {
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'university_features');
?>