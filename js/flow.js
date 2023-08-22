document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  const items = document.querySelectorAll(".flow__list__item");

  items.forEach((item) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: item,
        start: "top 75%",
        toggleActions: "play none none reverse",
      },
    });

    const num = item.querySelector(".flow__num");
    const border = item.querySelector(".flow__border");
    const title = item.querySelector(".flow__list__title");
    const sub = item.querySelector(".flow__list__sub");
    const text = item.querySelector(".flow__list__text");

    tl.to(num, { opacity: 1, visibility: "visible", duration: 0.5 })
      .to(border, { width: "100%", duration: 0.5 })
      .to([title, sub], {
        opacity: 1,
        visibility: "visible",
        duration: 0.5,
        stagger: 0.25,
      })
      .to(text, { opacity: 1, visibility: "visible", duration: 0.5 });
  });
});
