document.addEventListener("DOMContentLoaded", function () {
  /* アドレスバー・ツールバーを除いた100vhの高さを取得 */
  function setHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  }
  setHeight();
  window.addEventListener("resize", setHeight);

  const verticalSlider = new Swiper(".vertical-slider", {
    direction: "vertical",
    slidesPerView: 1,
    speed: 1100,
    mousewheel: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      stopOnLastSlide: true,
    },
    initialSlide: 0, // 1枚目のスライドからスタート
    on: {
      init: function () {
        updateProgressBar(this.activeIndex);
      },
      slideChangeTransitionStart: function () {
        resetProgressBars(); // 全てのプログレスバーをリセット
        updateProgressBar(this.activeIndex);
      },
      slideChange: function () {
        const currentSlide = this.slides[this.activeIndex];
        const header = document.querySelector(".header");
        if (
          currentSlide.id === "verticalSlider02" ||
          this.activeIndex >
            this.slides.indexOf(document.querySelector("#verticalSlider02"))
        ) {
          header.classList.add("color-white");
        } else {
          header.classList.remove("color-white");
        }
      },
    },
  });

  // 全てのプログレスバーのwidthを0%にリセットする関数
  function resetProgressBars() {
    const progressBars = document.querySelectorAll(".progress-bar");
    progressBars.forEach((bar) => {
      bar.style.width = "0%";
      bar.style.transition = "width 0s linear .8s";
    });
  }

  function updateProgressBar(index) {
    const slides = document.querySelectorAll(".swiper-slide");
    slides.forEach((slide, idx) => {
      const progressBar = slide.querySelector(".progress-bar");
      if (idx === index) {
        progressBar.style.transition = "width 6s linear";
        progressBar.style.width = "100%";
      }
    });
  }
});
