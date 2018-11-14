<?php 
add_action('wp_enqueue_scripts','enq');

function enq() {
	wp_enqueue_style('sty',get_template_directory_uri().'/style.css');
	wp_enqueue_style('new',get_template_directory_uri().'/new.css');
	wp_enqueue_style('googfonts','https://fonts.googleapis.com/css?family=Open+Sans:300,400,800');
	wp_enqueue_script('slick',get_template_directory_uri().'/slick.min.js',array('jquery'));
	wp_enqueue_script('run',get_template_directory_uri().'/run.js',array('jquery'));
	
}

add_action('init',function(){
		register_nav_menus( array(
			'top_header' => esc_html__( 'Top header menu', 'melinda' ),
			'main' => esc_html__( 'Main menu', 'melinda' ),
			'additional' => esc_html__( 'Additional header menu', 'melinda' ),
			'popup' => esc_html__( 'Popup/Mobile menu', 'melinda' ),
			'bottom_footer' => esc_html__( 'Bottom footer menu', 'melinda' ),
		) );
});


