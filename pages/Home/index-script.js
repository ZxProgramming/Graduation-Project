const lin1 = document.querySelector(".li-nav1");
const lin2 = document.querySelector(".li-nav2");
const lin3 = document.querySelector(".li-nav3");
const lin4 = document.querySelector(".li-nav4");
const lin5 = document.querySelector(".li-nav5");
const lin6 = document.querySelector(".li-nav6");

lin1.addEventListener("click", function () {
  lin1.setAttribute("id", "active-lin");
  lin2.removeAttribute("id", "active-lin");
  lin3.removeAttribute("id", "active-lin");
  lin4.removeAttribute("id", "active-lin");
  lin5.removeAttribute("id", "active-lin");
  lin6.removeAttribute("id", "active-lin");
});
lin2.addEventListener("click", function () {
  lin1.removeAttribute("id", "active-lin");
  lin2.setAttribute("id", "active-lin");
  lin3.removeAttribute("id", "active-lin");
  lin4.removeAttribute("id", "active-lin");
  lin5.removeAttribute("id", "active-lin");
  lin6.removeAttribute("id", "active-lin");
});
lin3.addEventListener("click", function () {
  lin1.removeAttribute("id", "active-lin");
  lin2.removeAttribute("id", "active-lin");
  lin3.setAttribute("id", "active-lin");
  lin4.removeAttribute("id", "active-lin");
  lin5.removeAttribute("id", "active-lin");
  lin6.removeAttribute("id", "active-lin");
});
lin4.addEventListener("click", function () {
  lin1.removeAttribute("id", "active-lin");
  lin2.removeAttribute("id", "active-lin");
  lin3.removeAttribute("id", "active-lin");
  lin4.setAttribute("id", "active-lin");
  lin5.removeAttribute("id", "active-lin");
  lin6.removeAttribute("id", "active-lin");
});
lin5.addEventListener("click", function () {
  lin1.removeAttribute("id", "active-lin");
  lin2.removeAttribute("id", "active-lin");
  lin3.removeAttribute("id", "active-lin");
  lin4.removeAttribute("id", "active-lin");
  lin5.setAttribute("id", "active-lin");
  lin6.removeAttribute("id", "active-lin");
});
lin6.addEventListener("click", function () {
  lin1.removeAttribute("id", "active-lin");
  lin2.removeAttribute("id", "active-lin");
  lin3.removeAttribute("id", "active-lin");
  lin4.removeAttribute("id", "active-lin");
  lin5.removeAttribute("id", "active-lin");
  lin6.setAttribute("id", "active-lin");
});

const lin_pho_1 = document.querySelector(".lin-pho1");
const lin_pho_2 = document.querySelector(".lin-pho2");
const lin_pho_3 = document.querySelector(".lin-pho3");
const lin_pho_4 = document.querySelector(".lin-pho4");
const lin_pho_5 = document.querySelector(".lin-pho5");
const lin_pho_6 = document.querySelector(".lin-pho6");

lin_pho_1.addEventListener("click", function () {
  lin_pho_1.setAttribute("id", "active-lin-pho");
  lin_pho_2.removeAttribute("id", "active-lin-pho");
  lin_pho_3.removeAttribute("id", "active-lin-pho");
  lin_pho_4.removeAttribute("id", "active-lin-pho");
  lin_pho_5.removeAttribute("id", "active-lin-pho");
  lin_pho_6.removeAttribute("id", "active-lin-pho");
  closeMenu();
});
lin_pho_2.addEventListener("click", function () {
  lin_pho_1.removeAttribute("id", "active-lin-pho");
  lin_pho_2.setAttribute("id", "active-lin-pho");
  lin_pho_3.removeAttribute("id", "active-lin-pho");
  lin_pho_4.removeAttribute("id", "active-lin-pho");
  lin_pho_5.removeAttribute("id", "active-lin-pho");
  lin_pho_6.removeAttribute("id", "active-lin-pho");
  closeMenu();
});
lin_pho_3.addEventListener("click", function () {
  lin_pho_1.removeAttribute("id", "active-lin-pho");
  lin_pho_2.removeAttribute("id", "active-lin-pho");
  lin_pho_3.setAttribute("id", "active-lin-pho");
  lin_pho_4.removeAttribute("id", "active-lin-pho");
  lin_pho_5.removeAttribute("id", "active-lin-pho");
  lin_pho_6.removeAttribute("id", "active-lin-pho");
  closeMenu();
});
lin_pho_4.addEventListener("click", function () {
  lin_pho_1.removeAttribute("id", "active-lin-pho");
  lin_pho_2.removeAttribute("id", "active-lin-pho");
  lin_pho_3.removeAttribute("id", "active-lin-pho");
  lin_pho_4.setAttribute("id", "active-lin-pho");
  lin_pho_5.removeAttribute("id", "active-lin-pho");
  lin_pho_6.removeAttribute("id", "active-lin-pho");
  closeMenu();
});
lin_pho_5.addEventListener("click", function () {
  lin_pho_1.removeAttribute("id", "active-lin-pho");
  lin_pho_2.removeAttribute("id", "active-lin-pho");
  lin_pho_3.removeAttribute("id", "active-lin-pho");
  lin_pho_4.removeAttribute("id", "active-lin-pho");
  lin_pho_5.setAttribute("id", "active-lin-pho");
  lin_pho_6.removeAttribute("id", "active-lin-pho");
  closeMenu();
});
lin_pho_6.addEventListener("click", function () {
  lin_pho_1.removeAttribute("id", "active-lin-pho");
  lin_pho_2.removeAttribute("id", "active-lin-pho");
  lin_pho_3.removeAttribute("id", "active-lin-pho");
  lin_pho_4.removeAttribute("id", "active-lin-pho");
  lin_pho_5.removeAttribute("id", "active-lin-pho");
  lin_pho_6.setAttribute("id", "active-lin-pho");
  closeMenu();
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
