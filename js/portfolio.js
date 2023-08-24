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



  const sliceTextFadeUpElements = document.querySelectorAll(".sliceTextFadeUp");

  sliceTextFadeUpElements.forEach((element) => {
    const innerHTML = element.innerHTML;
    const characters = Array.from(innerHTML);

    let wrappedHtml = "";
    let isInsideTag = false;

    for (let i = 0; i < characters.length; i++) {
      const char = characters[i];

      if (char === "<") {
        isInsideTag = true;
      }

      if (isInsideTag) {
        wrappedHtml += char;
      } else {
        wrappedHtml += `<span>${char}</span>`;
      }

      if (char === ">") {
        isInsideTag = false;
      }
    }

    element.innerHTML = wrappedHtml;

    const spans = element.querySelectorAll("span:not(:empty)");
    spans.forEach((span, idx) => {
      const delay = 40 * idx + "ms";
      span.style.setProperty("--delay", delay);
    });
  });

  sliceTextFadeUpElements.forEach((element) => {
    gsap.from(element.querySelectorAll("span:not(:empty)"), {
      opacity: 0,
      y: "2rem",
      stagger: 0.04, 
      scrollTrigger: {
        trigger: element,
        start: "top center",
        onEnter: () => element.classList.add("openPageTitle"),
      },
    });
  });
});
