<footer class="footer">
<?php
if ( !is_front_page() ) :
?>
  <div class="page__footer__nav">
    <div class="header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
      </a>
    </div>
    <ul>
      <li <?php if (is_post_type_archive('portfolio')) echo 'class="activeLink"'; ?>><a <?php if (is_post_type_archive('portfolio')) echo 'href="javascript:void(0)"'; else echo 'href="'.esc_url(home_url('/portfolio')).'"'; ?>>PORTFOLIO</a></li>
      <li <?php if (is_post_type_archive('topix')) echo 'class="activeLink"'; ?>><a <?php if (is_post_type_archive('topix')) echo 'href="javascript:void(0)"'; else echo 'href="'.esc_url(home_url('/topix')).'"'; ?>>TOPIX</a></li>
      <li <?php if (is_page('flow')) echo 'class="activeLink"'; ?>><a <?php if (is_page('flow')) echo 'href="javascript:void(0)"'; else echo 'href="'.esc_url(home_url('/flow')).'"'; ?>>FLOW</a></li>
      <li <?php if (is_front_page()) echo 'class="activeLink"'; ?>><a <?php if (is_front_page()) echo 'href="javascript:void(0)"'; else echo 'href="'.esc_url(home_url('#profile')).'"'; ?>>PROFILE</a></li>
      <li <?php if (is_page('inquiry')) echo 'class="activeLink"'; ?>><a <?php if (is_page('inquiry')) echo 'href="javascript:void(0)"'; else echo 'href="'.esc_url(home_url('/inquiry')).'"'; ?>>INQUIRY</a></li>
    </ul>
  </div>
<?php
endif; 
?>

  <div class="footer__inner">
    <div class="footer__bg">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/footer-bg.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-bg.png" width="2124px" height="1914px" alt="背景画像">
      </picture>
    </div>
    <div id="profile" class="footer__content">

      <div class="footer__company">
        <p class="footer__title">COMPANY</p>
        <div class="company__info">
          <p class="info__text">株式会社 TOKU</p>
          <p class="info__text">山梨県甲州市塩山三日市場1859-1</p>
          <p class="google__map"><a href="" target="_blank" rel="noopener noreferrer">Google Map</a></p>
        </div>
        <div class="company__tel__email">
          <p><a href="tel:090-4458-0505">TEL  ： 090-4458-0505</a></p>
          <p><a href="mailto:info@toku5.com">MAIL ： info@toku5.com</a></p>
        </div>
      </div>

      <div class="sp-sns">
      <a class="footer__instagram" href="https://www.instagram.com/official.toku/" target="_blank" rel="noopener noreferrer"></a>
      </div>

      <div class="footer__service">
        <p class="footer__title">SERVICE</p>
        <ul class="footer__service__list">
          <li>建築設計（architectual design）</li>
          <li>調査</li>
          <li>監理</li>
          <li>建築施工</li>
          <li>インテリアデザイン（interior design） </li>
          <li>プロダクトデザイン（product design）</li>
        </ul>
      </div>

      <div class="footer__sns">
        <p class="footer__title">SNS</p>
        <a class="footer__instagram" href="https://www.instagram.com/official.toku/" target="_blank" rel="noopener noreferrer"></a>
      </div>

    </div>
    <p class="copy">&copy;toku</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>