document.addEventListener("DOMContentLoaded", function () {
  // GSAPのタイムラインを初期化
  gsap.registerPlugin(ScrollTrigger);

  const imagesInPortfolio = document.querySelectorAll(
    ".single-post-content-portfolio img"
  );
  const thumbnailImage = document.querySelector(".single-post-thumbnail img");

  // フェードアップのアニメーション関数
  function fadeUpAnimation(element) {
    gsap.from(element, {
      opacity: 0,
      duration: 2.2,
      ease: "power3.out",
      scrollTrigger: {
        trigger: element,
        start: "top 90%",
        toggleActions: "play none none reverse",
      },
    });
  }

  // アニメーションを各画像に適用
  imagesInPortfolio.forEach((img) => {
    fadeUpAnimation(img);
  });

  // the_post_thumbnailにもアニメーションを適用
  if (thumbnailImage) {
    fadeUpAnimation(thumbnailImage);
  }
});
