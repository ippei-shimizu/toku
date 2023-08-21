<?php get_header(); ?>

<main>

<div class="top">
<div id="swiperContainer" class="swiper-container vertical-slider">
  <div class="swiper-wrapper vertical-slider__wrapper">
    <div id="verticalSlider01" class="swiper-slide vertical-slider__slide">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-01.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-01.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-01-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-01-sp.png" width="1365px" height="943px" alt="建築事例01" class="vertical-slider-img">
      </picture>
      <div class="progress-container">
        <div class="progress-bar"></div>
        </div>
      <div class="slide-number"><span>1</span><span>-</span><span>5</span></div>
    </div>
    <div id="verticalSlider02" class="swiper-slide vertical-slider__slide">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-02.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-02.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-02-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-02-sp.png" width="1365px" height="943px" alt="建築事例01" class="vertical-slider-img">
      </picture>
      <div class="progress-container">
        <div class="progress-bar"></div>
        </div>
      <div class="slide-number"><span>2</span><span>-</span><span>5</span></div>
    </div>
    <div class="swiper-slide vertical-slider__slide">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-03.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-03.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-03-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-03-sp.png" width="1365px" height="943px" alt="建築事例01" class="vertical-slider-img">
      </picture>
      <div class="progress-container">
        <div class="progress-bar"></div>
        </div>
      <div class="slide-number"><span>3</span><span>-</span><span>5</span></div>
    </div>
    <div class="swiper-slide vertical-slider__slide">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-04.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-04.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-04-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-04-sp.png" width="1365px" height="943px" alt="建築事例01" class="vertical-slider-img">
      </picture>
      <div class="progress-container">
        <div class="progress-bar"></div>
        </div>
      <div class="slide-number"><span>4</span><span>-</span><span>5</span></div>
    </div>
    <div id="verticalSlider05" class="swiper-slide vertical-slider__slide">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-05.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-05.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top-05-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-05-sp.png" width="1365px" height="943px" alt="建築事例01" class="vertical-slider-img">
      </picture>
      <div class="progress-container">
        <div class="progress-bar"></div>
        </div>
      <div class="slide-number"><span>5</span><span>-</span><span>5</span></div>
      <div id="offZindex"></div>
    </div>
  </div>
</div>
</div>

<div class="ism">
  <div id="ism" class="ism__inner observer">
    <div class="ism__bg">
      <div class="scrolldown1"><span>Scroll</span></div>
      <div class="ism__box">
        <h2 class="scrollOpen">理想は等身大だったりする。</h2>
        <p class="scrollOpen">IT IS AS LARGE AS LIFE WITH THE IDEAL</p>
      </div>
    </div>

    <div id="btnNav" class="btm__nav__container">
      <div class="btm__nav__inner">
        <ul class="btm__nav__box">
          <li>
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>">
              <p>PORTFOLIO</p>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-01.png" width="1298px" height="865px" alt="portfolio">
              </picture>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/flow')); ?>">
              <p>FLOW</p>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-02.png" width="1298px" height="865px" alt="FLOW">
              </picture>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/inquiry')); ?>">
              <p>INQUIRY</p>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-03.png" width="1298px" height="865px" alt="INQUIRY">
              </picture>
            </a>
          </li>
        </ul>
        <div class="swiper-btn-nav btm__nav__box__sp">
          <div class="swiper-wrapper">        
              <div class="swiper-slide">
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>">
                  <p>PORTFOLIO</p>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-01.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-01.png" width="1298px" height="865px" alt="portfolio">
                  </picture>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="<?php echo esc_url(home_url('/flow')); ?>">
                  <p>FLOW</p>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-02.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-02.png" width="1298px" height="865px" alt="FLOW">
                  </picture>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="<?php echo esc_url(home_url('/inquiry')); ?>">
                  <p>INQUIRY</p>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-03.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btm-nav-03.png" width="1298px" height="865px" alt="INQUIRY">
                  </picture>
                </a>
              </div>
          </div>
          <div class="swiper-button-prev swiper-button"></div>
          <div class="swiper-button-next swiper-button"></div>
        </div>
        <p class="btm__nav__text__01">PUBLIC & PRIVATE  SENSE OF THE SEASON  BLANK SPACE & FLEXIBLE</p>
        <p class="btm__nav__text__02">Architect and creators.</p>
      </div>
    </div>

<!-- topix -->
<div class="top__topix">
<div class="swiper">
  <div class="swiper-wrapper">
    <?php
    $args = array(
        'post_type' => 'topix',
        'posts_per_page' => 3,
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            echo '<div class="swiper-slide">';
            echo '<div class="top-topix-post">';

            echo '<div class="top-topix-post-title">';
            echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
            echo '</div>';

            if (has_post_thumbnail()) {
                echo '<div class="top-topix-post-thumbnail">';
                echo '<a href="' . get_the_permalink() . '">';
                the_post_thumbnail();
                echo '</a></div>';
            }

            echo '</div>';
            echo '</div>';
        }
    }
    wp_reset_postdata();
    ?>
  </div>
  <div class="scrollbar-grid">
    <div></div>
    <div class="swiper-scrollbar"></div>
  </div>
</div>

    <p class="top-topix-btn">
    <a href="<?php echo esc_url( home_url( '/topix' ) ); ?>">VIEW MORE</a>
    </p>
</div>

<?php get_footer(); ?>
  </div>
</div>


</main>

