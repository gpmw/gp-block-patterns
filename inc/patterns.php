<?php

function gp_block_patterns() {

	register_block_pattern(
		'gp-block-patterns/gp-content-upgrade',
		array(
			'title'       => __( 'Title', 'gp-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks', 'gp-block-patterns' ),
			
			'content'     => "{escaped block code}",
			
			'categories'  => array( 'Buttons Columns Featured Gallery Header Images Text' ),
		)
	);

}    

add_action( 'init', 'gp_block_patterns' );
