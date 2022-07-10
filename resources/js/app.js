// Navigation toggle
window.addEventListener("load", function () {
  let main_navigation = document.querySelector("#primary-menu")
  let primary_nav_toggle = document.querySelector("#primary-menu-toggle")
  let opacity = 0
  const translateScreen = () => {
    if (opacity == 0) main_navigation.style.transform = `translateX(${window.innerWidth}px)`
  }
  window.addEventListener("resize", translateScreen)
  translateScreen()
  let toggleNav = function (e) {
    e.preventDefault()

    opacity = opacity == 0.98 ? 0 : 0.98
    main_navigation.style.opacity = opacity
    main_navigation.style.transform =
      opacity == 0 ? `translateX(${window.innerWidth}px)` : `translateX(0px)`
    primary_nav_toggle.querySelectorAll("svg").forEach((svg) => {
      svg.classList.toggle("hidden")
    })
  }
  primary_nav_toggle.addEventListener("click", toggleNav)
})
