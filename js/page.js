document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

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
        // 文字がスペースの場合は &nbsp; に置き換える
        const content = (char === ' ') ? '&nbsp;' : char;
        wrappedHtml += `<span>${content}</span>`;
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
        start: "top 80%",
        onEnter: () => element.classList.add("openPageTitle"),
      },
    });
  });

  const pageTitleElements = document.querySelectorAll(".page-title");

  pageTitleElements.forEach((element, index) => {
    const spans = element.querySelectorAll("span");
    spans.forEach((span, idx) => {
      const delay = 40 * idx + "ms";
      span.style.setProperty("--delay", delay);
    });

    element.classList.add("openPageTitle");
  });
});
