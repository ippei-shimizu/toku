document.addEventListener("DOMContentLoaded", function () {
  const loadingElement = document.querySelector(".loading");
  const bodyElement = document.body;

  if (loadingElement) {
    loadingElement.classList.add("loadingOpen");

    setTimeout(function () {
      loadingElement.style.display = "none";
    }, 3600);
  }

  setTimeout(function () {
    bodyElement.style.overflow = "initial";
  }, 3600);

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
        setTimeout(() => {
          this.params.autoplay.delay = 5000;
          this.autoplay.start();
        }, 1000);
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
  const targetIsm = document.querySelectorAll(".observer");
  const animatedElements = document.querySelectorAll(".scrollOpen");
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
        document.querySelector(".header").classList.add("header-small");
      } else if (!entry.isIntersecting && entry.target.id === "ism") {
        document.querySelector(".top").classList.remove("fixed");
        document.querySelector(".header").classList.remove("header-small");
      }

      // animatedElements のみに visible クラスを付与する
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

  const hamburger = document.getElementById("hamburger");
  const navMenu = document.querySelector(".header__nav");

  function toggleMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("open");
    if (navMenu.classList.contains("open")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  }

  hamburger.addEventListener("click", toggleMenu);
});
