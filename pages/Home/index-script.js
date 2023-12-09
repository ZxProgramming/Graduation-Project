const lin_nav = document.querySelectorAll(".li-nav");

lin_nav.forEach(function (ele) {
  ele.addEventListener("click", function () {
    lin_nav.forEach(function (elr) {
      elr.removeAttribute("id", "active-lin");
    });
    this.setAttribute("id", "active-lin");
  });
});

const lin_pho = document.querySelectorAll(".lin-pho");

lin_pho.forEach(function (ele) {
  ele.addEventListener("click", function () {
    lin_pho.forEach(function (elr) {
      elr.removeAttribute("id", "active-lin-pho");
    });
    this.setAttribute("id", "active-lin-pho");
    closeMenu();
  });
});
const nav_phone = document.getElementById("nav-phone");

const menu_btn = document.getElementById("menu-btn");
const clos_btn = document.getElementById("clos-btn");

menu_btn.addEventListener("click", function () {
  clos_btn.style.display = "block";
  this.style.display = "none";
  nav_phone.style.top = "330%";
});
clos_btn.addEventListener("click", closeMenu);

function closeMenu() {
  menu_btn.style.display = "block";
  clos_btn.style.display = "none";
  nav_phone.style.top = "-200%";
}
