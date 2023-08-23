<?php get_header("page"); ?>

<div class="topix__fv flow__fv">
  <div class="flow__fv__inner">
    <div class="flow__fv__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/topix-bg.png" width="1366px" height="942px" alt="topix">
    </div>
  </div>
</div>


<div class="single__topix__container">
<div class="single-content">
  <div class="single-content-inner">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        // Display the post thumbnail and title side by side
        echo '<div class="single-post-header">';
          echo '<div class="single-post-thumbnail">';
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          echo '</div>';
          echo '<div class="single-post-title">';
            // Display categories
            $categories = get_the_term_list( $post->ID, 'topix_category', '', ', ' );
            if ( $categories ) :
              echo '<div class="post-categories">' . $categories . '</div>';
            endif;
            // Display the post date
            echo '<div class="post-date">' . get_the_date( 'Y.m.d' ) . '</div>';
            // Display the post title
            the_title();
          echo '</div>';
        echo '</div>';

        // Display the post excerpt
        echo '<div class="single-post-excerpt">';
        the_field('topix_text');
        echo '</div>';
    

        // Display the post content with a view more button
        echo '<div class="single-post-content single-post-content-topix" style="display: none;">';
          the_content();
        echo '</div>';

        // Display the view more button if the post has content
        if ( get_the_content() != '' ) :
          echo '<button id="view-more">VIEW MORE</button>';
        endif;

      endwhile;
    else :
      echo '<p>No posts found</p>';
    endif;
    ?>

    <!-- Display the back button -->
    <div class="back-button">
      <a href="javascript:history.back()">BACK TO LIST</a>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>