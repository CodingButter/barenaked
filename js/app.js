(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    let main_navigation = document.querySelector("#primary-menu");
    let primary_nav_toggle = document.querySelector("#primary-menu-toggle");
    let toggleNav = function(e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
      primary_nav_toggle.querySelectorAll("svg").forEach((svg) => svg.classList.toggle("hidden"));
    };
    primary_nav_toggle.addEventListener("click", toggleNav);
  });
})();
