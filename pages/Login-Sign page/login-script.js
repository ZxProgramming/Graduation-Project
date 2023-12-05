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

const user_Kind = document.getElementById("user-kind");
const lawyer_kind = document.getElementById("lawyer-kind");
const lawyer_categry_sel = document.getElementById("lawyer-categry-sel");

lawyer_kind.addEventListener("click", function () {
  user_Kind.classList.remove("active-kind");
  this.classList.add("active-kind");
  lawyer_categry_sel.style.display = "block";
});
user_Kind.addEventListener("click", function () {
  lawyer_kind.classList.remove("active-kind");
  this.classList.add("active-kind");
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
});
