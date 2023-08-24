<?php get_header("page"); ?>

<div class="single-portfolio-container single-content">
  <div class="single-content-inner">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();

      echo '<div class="single-post-title-box">';
      echo '<div class="single-post-title-box-inner">';
      echo '<h2 class="single-post-title sliceTextFadeUp">'; 
      the_title();
      echo '</h2>';
      echo '<p class="single-post-title-sub sliceTextFadeUp">' . get_field('year_of_city') . '</p>'; 
      echo '</div>';
      echo '</div>';
        
          echo '<div class="single-post-thumbnail">';
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          echo '</div>';
        
        echo '<div class="single-post-content-portfolio single-post-content">';
          the_content();
        echo '</div>';

        echo '<div class="single-post-title-box-bottom fadeUpElement">';
        echo '<h2 class="single-post-title">'; 
        the_title();
        echo '</h2>';
        echo '<span> / </span>';
        echo '<p class="single-post-title-sub">' . get_field('year_of_city') . '</p>'; 
        echo '</div>';

      endwhile;
    else :
      echo '<p>No posts found</p>';
    endif;
    ?>


  </div>
</div>

<?php get_footer(); ?>
