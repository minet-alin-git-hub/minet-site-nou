document.addEventListener("DOMContentLoaded", function() {
  const menuBtn = document.querySelector(".open-mobile-menu");
  const mobileMenu = document.querySelector(".mobile-menu");
  menuBtn.addEventListener("click", function(e) {
    e.preventDefault();
    mobileMenu.classList.toggle("active");
  });
});
