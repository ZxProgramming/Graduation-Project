const btn_log = document.getElementById("login-btn");
const btn_sig = document.getElementById("signup-btn");
const sig_form = document.getElementById("signup-form");
const log_form = document.getElementById("login-form");

btn_sig.addEventListener("click", function () {
  this.classList.add("active");
  btn_log.classList.remove("active");
  sig_form.style.display = "block";
  log_form.style.display = "none";
});
btn_log.addEventListener("click", function () {
  this.classList.add("active");
  btn_sig.classList.remove("active");
  sig_form.style.display = "none";
  log_form.style.display = "flex";
});

const user_kind = document.getElementById("user-kind");
const lawyer_kind = document.getElementById("lawyer-kind");

const lawyer_categry_sel = document.getElementById("lawyer-categry-sel");

lawyer_kind.addEventListener("click", function () {
  user_kind.classList.remove("active-kind");
  this.classList.add("active-kind");
  this.setAttribute("name", "lawyer");
  user_kind.removeAttribute("name");
  lawyer_categry_sel.style.display = "block";
});
user_kind.addEventListener("click", function () {
  lawyer_kind.classList.remove("active-kind");
  this.classList.add("active-kind");
  this.setAttribute("name", "user");
  lawyer_kind.removeAttribute("name");
  lawyer_categry_sel.style.display = "none";
});

const spa_login = document.getElementById("spa-login");
const spa_sign = document.getElementById("spa-sign");

spa_login.addEventListener("click", function () {
  btn_log.classList.add("active");
  btn_sig.classList.remove("active");
  sig_form.style.display = "none";
  log_form.style.display = "flex";
});

spa_sign.addEventListener("click", function () {
  btn_sig.classList.add("active");
  btn_log.classList.remove("active");
  sig_form.style.display = "block";
  log_form.style.display = "none";
 HEAD:asstes/js/registration-script.js
});

const show_pass_btn = document.getElementById("show_pass_sign");
const hide_pass_btn = document.getElementById("hide_pass_sign");
const pass_btn = document.getElementById("password_sign");

show_pass_btn.addEventListener("click", function () {
  pass_btn.removeAttribute("type");
  pass_btn.setAttribute("type", "text");
  this.style.display = "none";
  hide_pass_btn.style.display = "block";
});
hide_pass_btn.addEventListener("click", function () {
  pass_btn.removeAttribute("type");
  pass_btn.setAttribute("type", "password");
  this.style.display = "none";
  show_pass_btn.style.display = "block";
});
pass_btn.addEventListener("focusin", function () {
  show_pass_btn.style.display = "block";
});
pass_btn.addEventListener("focusout", function () {
  if (this.value == "") {
    show_pass_btn.style.display = "none";
  }
});

const show_pass_loginBtn = document.getElementById("show_pass_login");
const hide_pass_loginBtn = document.getElementById("hide_pass_login");
const pass_loginBtn = document.getElementById("password_login");

show_pass_loginBtn.addEventListener("click", function () {
  pass_loginBtn.removeAttribute("type");
  pass_loginBtn.setAttribute("type", "text");
  this.style.display = "none";
  hide_pass_loginBtn.style.display = "block";
});
hide_pass_loginBtn.addEventListener("click", function () {
  pass_loginBtn.removeAttribute("type");
  pass_loginBtn.setAttribute("type", "password");
  this.style.display = "none";
  show_pass_loginBtn.style.display = "block";
});
pass_loginBtn.addEventListener("focusin", function () {
  show_pass_loginBtn.style.display = "block";
});
pass_loginBtn.addEventListener("focusout", function () {
  if (this.value == "") {
    show_pass_loginBtn.style.display = "none";
  }
});
// >>>>>>> bc33a286155294bd5baf41a36fa6f5579f3ee12f:pages/Login-Sign page/registration-script.js
