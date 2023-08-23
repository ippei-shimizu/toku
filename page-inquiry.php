<?php get_header("page"); ?>

<div class="flow__fv">
  <div class="flow__fv__inner">
    <div class="flow__fv__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/inqury-fv.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/inqury-fv.png" media="(min-width:768px)">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/inqury-fv-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inqury-fv-sp.png" width="1366px" height="942px" alt="INQUIRY">
      </picture>
    </div>
    <h2 class="page-title">
      <span>I</span>
      <span>N</span>
      <span>Q</span>
      <span>U</span>
      <span>I</span>
      <span>R</span>
      <span>Y</span>
    </h2>
  </div>
</div>

<div class="inquiry__contents">
  <div class="inquiry__contents__inner">
    <p class="inquiry__tel">
      <a href="tel:090-4458-0505">090-4458-0505</a>
    </p>
    <p class="inquiry__contents__text">お問い合わせ</p>
  </div>
</div>

<div class="contact__form">
  <div class="contact__form__inner">
<?php
  echo do_shortcode('[contact-form-7 id="248481a" title="お問い合わせフォーム"]');
?>
  </div>
</div>

<?php get_footer(); ?>