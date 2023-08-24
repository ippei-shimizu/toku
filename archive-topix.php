<?php get_header("page"); ?>

<div class="topix__fv flow__fv">
  <div class="flow__fv__inner">
    <div class="flow__fv__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/topix-bg.png" width="1366px" height="942px" alt="topix">
    </div>
    <h2 class="page-title">
      <span>T</span>
      <span>O</span>
      <span>P</span>
      <span>I</span>
      <span>X</span>
    </h2>
  </div>
</div>


<div class="topix__archive__container">
<div class="archive-title-wrap">
	<div class="archive-category fadeUpElement">
<?php
$terms = get_terms( array(
	'taxonomy'   => 'topix_category',
	'hide_empty' => false,
	'orderby'    => 'name',
	'order'      => 'DESC',
) );

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	echo '<ul>';
	// Add ALL at the beginning
	$all_class = is_post_type_archive( 'topix' ) ? ' active' : '';
	echo '<li><a href="' . get_post_type_archive_link( 'topix' ) . '" class="' . $all_class . '">ALL</a></li>';
	foreach ( $terms as $term ) {
		$term_class = is_tax( 'topix_category', $term->term_id ) ? ' active' : '';
		echo '<li><a href="' . get_term_link( $term ) . '" class="' . $term_class . '">' . $term->name . '</a></li>';
	}
	echo '</ul>';
}
?>	
	</div>
</div>

<div class="archive-contents">
	<div class="archive-contents-inner">

	<?php
	// Reset the query
	wp_reset_query();

	// The Query
	query_posts( array(
		'post_type'      => 'topix', // custom post type
		'posts_per_page' => 12, // display 12 posts per page
		'orderby' => 'date', // order by post date
		'order' => 'DESC', // in descending order
		'paged' => $paged 
	) );

	// The Loop
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			// Begin post container
			echo '<div class="archive-post-topix archive-post fadeUpElement">';

			// Display the post thumbnail
			if ( has_post_thumbnail() ) : ?>
				<div class="archive-post-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
			<?php endif;

			// Display the post date and categories
			echo '<div class="archive-post-meta">';
			echo '<span class="post-date">' . get_the_date( 'Y.m.d' ) . '</span>'; // Date in Y.m.d format
			echo '<span class="post-categories">' . get_the_term_list( $post->ID, 'topix_category', '', ', ' ) . '</span>'; // Categories, separated by a comma
			echo '</div>';

			// Display the post title
			echo '<div class="archive-post-title">';
			echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
			echo '</div>';

			// End post container
			echo '</div>';

		endwhile;
	else :
		echo '<p>TOPIXの記事はありません。</p>';
	endif;

	// Reset Query
	wp_reset_query();
?>

	</div>
<div class="archive-pagenation fadeUpElement">
		<?php
		echo '<div class="prev-page">';
		previous_posts_link( 'prev' );
		echo '</div>';

	   echo '<div class="pagenation-num">';
			echo paginate_links( array(
		'prev_next' => false 
	) );
	  echo '</div>';

		echo '<div class="next-page">';
		next_posts_link( 'next' );
		echo '</div>';
		?>	
</div>
</div>

</div>

<?php get_footer("page"); ?>
