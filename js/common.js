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

  hamburger.addEventListener("click", toggleMenu);

  profileLink.addEventListener("click", function () {
    if (navMenu.classList.contains("open")) {
      toggleMenu();
    }
  });
});
