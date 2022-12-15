const toggle = document.querySelector(".toggle");
const navMenu = document.querySelector(".nav-menu");


toggle.addEventListener("click", () => {
  toggle.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-menu").forEach(n => 
    n.addEventListener("click", () => {
      toggle.classList.remove("active");
        navMenu.classList.remove("active");
    }))