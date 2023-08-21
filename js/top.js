document.addEventListener("DOMContentLoaded", function () {
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
    initialSlide: 0,
    watchOverflow: true,
    on: {
      init: function () {
        updateProgressBar(this.activeIndex);
      },
      slideChangeTransitionStart: function () {
        resetProgressBars();
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

  const targetOffZindex = document.querySelector("#offZindex");
  const targetIsm = document.querySelector("#ism");
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0,
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && entry.target.id === "offZindex") {
        verticalSlider.params.mousewheel.enabled = false;
        document.querySelector(".top").classList.add("fixed");
      } else if (!entry.isIntersecting && entry.target.id === "ism") {
        document.querySelector(".top").classList.remove("fixed");
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  observer.observe(targetOffZindex);
  observer.observe(targetIsm);

  // top-topix
  const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
    },
  });
});
