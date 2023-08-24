document.addEventListener("DOMContentLoaded", function () {
  // GSAPのタイムラインを初期化
  gsap.registerPlugin(ScrollTrigger);

  const items = document.querySelectorAll(".flow__list__item");

  items.forEach((item) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: item,
        start: "top 100%",
        toggleActions: "play none none none", // リバースアクションを無効化
        once: true, // アニメーションを一度だけ発火させる
      },
    });

    const num = item.querySelector(".flow__num");
    const border = item.querySelector(".flow__border");
    const title = item.querySelector(".flow__list__title");
    const sub = item.querySelector(".flow__list__sub");
    const text = item.querySelector(".flow__list__text");

    tl.to(num, { opacity: 1, visibility: "visible", duration:1.2 })
      .to(border, { width: "100%", duration: .8 })
      .to([title, sub], {
        opacity: 1,
        visibility: "visible",
        duration: 1.2,
        stagger: 0.15,
      })
      .to(text, { opacity: 1, visibility: "visible", duration:1.2 });
  });
});
