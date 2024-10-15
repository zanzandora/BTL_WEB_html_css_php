const btnResgister = document.querySelector(".js-register--click");
const btnLogin = document.querySelector(".js-login--click");
const modal = document.querySelector(".modal");
const registerForm = document.querySelector(".auth-form--register");
const loginForm = document.querySelector(".auth-form--login");
const switchToLogin = document.getElementById("switchToLogin");
const switchToRegister = document.getElementById("switchToRegister");
const modalBody = document.querySelector(".modal__body");

btnResgister.onclick = (event) => {
  modal.style.display = "flex";
  registerForm.style.display = "block";
  loginForm.style.display = "none";
};
btnLogin.onclick = (event) => {
  modal.style.display = "flex";
  registerForm.style.display = "none";
  loginForm.style.display = "block";
};
switchToLogin.addEventListener("click", (event) => {
  registerForm.style.display = "none";
  loginForm.style.display = "block";
});
switchToRegister.addEventListener("click", (event) => {
  loginForm.style.display = "none";
  registerForm.style.display = "block";
});
modalBody.onclick = (event) => {
  event.stopPropagation();
};
modal.onclick = (event) => {
  modal.style.display = "none";
};
