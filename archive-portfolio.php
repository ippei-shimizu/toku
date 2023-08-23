<?php get_header("page"); ?>


<div class="flow__fv">
  <div class="flow__fv__inner">
    <div class="flow__fv__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-fv.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-fv.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-fv-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-fv-sp.png" width="1366px" height="942px" alt="portfolio">
      </picture>
    </div>
    <h2 class="page-title">
      <span>P</span>
      <span>O</span>
      <span>R</span>
      <span>T</span>
      <span>F</span>
      <span>O</span>
      <span>L</span>
      <span>I</span>
      <span>O</span>
    </h2>
  </div>
</div>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  if ($paged == 1): ?>
<div class="portfolio__content">
  <div class="portfolio__inner">
    <p>家は暮らしはじめてから変化をつづけ、少しずつ自分スタイルにしていくもの。<br>
自分の大好きなものや素材。音や匂い。たくさんの要素があるはず。<br>
好きなものだけに囲まれた暮らしにするために<br>
それを描いていけるだけの絶妙な余白を残しておく事。<br>
そんなイメージも考えながら家の設計をしていくことが大切。<br>
それが、tokuの家づくり。</p>
  </div>
</div>

<div class="portfolio__scroll">
</div>
<?php
endif; ?>

<div class="portfolio__posts">
  <div class="portfolio__posts__inner">

    <div class="portfolio__items">
    <?php
	// Reset the query
	wp_reset_query();

	// The Query
	query_posts( array(
		'post_type'      => 'portfolio', // custom post type
		'posts_per_page' => 6, // display 12 posts per page
		'orderby' => 'date', // order by post date
		'order' => 'DESC', // in descending order
		'paged' => $paged 
	) );

	// The Loop
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			// Begin post container
			echo '<div class="archive-post-portfolio archive-post">';

			// Display the post thumbnail
			if ( has_post_thumbnail() ) : ?>
				<div class="archive-post-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
			<?php endif;

			// Display the post title
			echo '<div class="archive-post-title">';
			echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
      echo '<p>' . get_field('year_of_city') . '</p>'; 
			echo '</div>';

			// End post container
			echo '</div>';

		endwhile;
	else :
		echo '<p style="color:#fff;font-size:16px;">portfolioの投稿はありません。</p>';
	endif;

	// Reset Query
	wp_reset_query();
?>
    </div>

<div class="archive-pagenation">
<?php
echo '<div class="prev-page">';
previous_posts_link( '' );
echo '</div>';

echo '<div class="pagenation-num">';
echo paginate_links( array(
'prev_next' => false 
) );
echo '</div>';

echo '<div class="next-page">';
next_posts_link( '' );
echo '</div>';
?>	
</div>

  </div>
</div>

<?php get_footer(); ?>