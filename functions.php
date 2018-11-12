<?php 
add_action('wp_enqueue_scripts','enq');

function enq() {
	wp_enqueue_style('sty',get_template_directory_uri().'/style.css');
	wp_enqueue_style('new',get_template_directory_uri().'/new.css');
	
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


