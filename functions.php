<?php 

	add_action('after_setup_theme','foysalmjhf_theme_support');

	function foysalmjhf_theme_support(){
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		load_theme_textdomain('foysalmjhf' );	
	}

	
	add_action('wp_enqueue_scripts','foysalmjhf_file_enqueue');

// CSS File

	function foysalmjhf_file_enqueue(){
		wp_enqueue_style('style', get_theme_file_uri().'/css/style.css', null, true, 'all');
		wp_enqueue_style( 'main', get_stylesheet_uri() );


		wp_enqueue_script( 'main', get_theme_file_uri().'/js/main.js', array('jquery'), true, true );


}


 ?>