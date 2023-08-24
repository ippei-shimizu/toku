document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburger");
  const navMenu = document.querySelector(".header__nav");
  const profileLink = document.getElementById("profileLink");

  function toggleMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("open");
    if (navMenu.classList.contains("open")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  }

  gsap.registerPlugin(ScrollTrigger);

  const fadeUpElements = document.querySelectorAll(".fadeUpElement");
  fadeUpElements.forEach(el => {
    gsap.set(el, { opacity: 0 });

    gsap.to(el, {
      opacity: 1,
      duration: 1.8, 
      ease: "cubic-bezier(0.12, 0.86, 0.3, 1)",
      scrollTrigger: {
        trigger: el, 
        start: 'top 75%', 
        toggleActions: "play none none none", 
      },
    });
  });

  hamburger.addEventListener("click", toggleMenu);

  profileLink.addEventListener("click", function () {
    if (navMenu.classList.contains("open")) {
      toggleMenu();
    }
  });
});
