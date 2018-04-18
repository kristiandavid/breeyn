<?php
/**
 * Entry meta information for posts
 *
 * @package WordPress
 * @subpackage breeyn
 * @since breeyn 1.0.0
 */

if ( ! function_exists( 'breeyn_entry_meta' ) ) :
	function breeyn_entry_meta() {
		echo '<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( 'Posted on %s at %s.', 'breeyn' ), get_the_date(), get_the_time() ) .'</time>';
		echo '<p class="byline author">'. __( 'Written by', 'breeyn' ) .' <a href="'. get_author_posts_url( get_the_author_meta( 'ID' ) ) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
	}
endif;
?>
