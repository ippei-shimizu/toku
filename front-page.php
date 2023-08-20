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
  <div id="ism" class="ism__inner">
    <div class="ism__bg">
      <div class="scrolldown1"><span>Scroll</span></div>
      <div class="ism__box">
        <h2>理想は等身大だったりする。</h2>
        <p>IT IS AS LARGE AS LIFE WITH THE IDEAL</p>
      </div>
    </div>
  </div>
</div>

</main>

<?php get_footer(); ?>