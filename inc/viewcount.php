<?php
function rm_post_view_count(){
	if ( is_single() ){
		global $post;
		$count_post = esc_attr( get_post_meta( $post->ID, '_post_views_count', true) );
		if( $count_post == ''){
			$count_post = 1;
			add_post_meta( $post->ID, '_post_views_count', $count_post);
		}else{
			$count_post = (int)$count_post + 1;
			update_post_meta( $post->ID, '_post_views_count', $count_post);
		}
	}
}
add_action('wp_head', 'rm_post_view_count');
?>