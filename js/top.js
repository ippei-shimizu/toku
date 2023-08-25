document.body.style.overflow = "hidden";
let firstLoadDelayApplied = false;

document.addEventListener("DOMContentLoaded", function () {
  const firstSlideImage = document.querySelector(
    ".swiper-slide:first-child .vertical-slider-img"
  );
  firstSlideImage.classList.add("animated");

  const loadingElement = document.querySelector(".loading");
  const bodyElement = document.body;

  if (loadingElement) {
    loadingElement.classList.add("loadingOpen");

    setTimeout(function () {
      loadingElement.style.display = "none";
    }, 3000);
  }

  setTimeout(function () {
    bodyElement.style.overflow = "initial";
  }, 3000);

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
    autoplay: false,
    initialSlide: 0,
    watchOverflow: true,
    on: {
      init: function () {
        updateProgressBar(this.activeIndex);
      },
      slideChangeTransitionStart: function () {
        resetProgressBars();
        updateProgressBar(this.activeIndex);
        setTimeout(() => {
          const allSlideImages = document.querySelectorAll(
            ".vertical-slider-img"
          );
          const currentSlideImg = this.slides[this.activeIndex].querySelector(
            ".vertical-slider-img"
          );
          allSlideImages.forEach((img) => {
            img.classList.remove("animated");
            currentSlideImg.classList.add("animated");
          });
        }, 1000);
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

        if (this.activeIndex === this.slides.length - 1) {
          setTimeout(function () {
            const scrolldownElement = document.querySelector(
              ".swiper-slide:last-child .scrolldown1"
            );
            scrolldownElement.style.opacity = 1;
          }, 5000);
        }
      },
    },
  });

  setTimeout(function () {
    verticalSlider.params.autoplay = {
      delay: 5000,
      disableOnInteraction: false,
      stopOnLastSlide: true,
    };
    verticalSlider.autoplay.start();
  }, 2600);

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
        if (idx === 0 && !firstLoadDelayApplied) {
          progressBar.style.transition = "width 5s linear 2.5s";
          firstLoadDelayApplied = true;
        } else {
          progressBar.style.transition = "width 5s linear 0s";
        }
        progressBar.style.width = "100%";
      }
    });
  }

  const targetOffZindex = document.querySelector("#offZindex");
  const targetIsm = document.querySelectorAll(".observer");
  const animatedElements = document.querySelectorAll(".scrollOpen");
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0,
  };

  const wrapTextWithSpans = (element) => {
    let wrappedHtml = '';
    Array.from(element.textContent).forEach((char, idx) => {
      const delay = 40 * idx + 'ms';
      const content = (char === ' ') ? '&nbsp;' : char;
      wrappedHtml += `<span style="--delay: ${delay}">${content}</span>`;
    });
    element.innerHTML = wrappedHtml;
  };
  

  const scrollOpenElements = document.querySelectorAll(".scrollOpen");
  scrollOpenElements.forEach(wrapTextWithSpans);

  const fadeUpItems = document.querySelectorAll(".fadeUpItem");
const fadeUpObserverCallback = (entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("fadeUpItemVisit");
            fadeUpObserver.unobserve(entry.target); 
        }
    });
};

const fadeUpObserver = new IntersectionObserver(fadeUpObserverCallback, observerOptions);

fadeUpItems.forEach((element) => {
    fadeUpObserver.observe(element);
});

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && entry.target.id === "offZindex") {
        verticalSlider.params.mousewheel.enabled = false;
        document.querySelector(".top").classList.add("fixed");
        document.querySelector(".header").classList.add("header-small");
      } else if (!entry.isIntersecting && entry.target.id === "ism") {
        document.querySelector(".top").classList.remove("fixed");
        document.querySelector(".header").classList.remove("header-small");
      }

      if (
        entry.isIntersecting &&
        entry.target.classList.contains("scrollOpen")
      ) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  observer.observe(targetOffZindex);

  animatedElements.forEach((element) => {
    observer.observe(element);
  });

  // targetIsmの各要素をobserve
  targetIsm.forEach((el) => {
    observer.observe(el);
  });

  // top-btn-nav
  const swiperBtnNav = new Swiper(".swiper-btn-nav", {
    slidesPerView: 1,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // top-topix
  const swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });
});
