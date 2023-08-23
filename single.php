<?php
$post_type = get_post_type();

if ( $post_type == 'portfolio' ) {
	include( get_template_directory() . '/single-portfolio.php' );
} elseif ( $post_type == 'topix' ) {
	include( get_template_directory() . '/single-topix.php' );
} else {
}
?>