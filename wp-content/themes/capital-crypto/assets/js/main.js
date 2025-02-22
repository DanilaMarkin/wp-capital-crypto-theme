// Открытие и закрытие меню для моб устройств
const burgerMenu = document.querySelector(".header__burger-menu-btn");
const sideMenu = document.querySelector(".sidemenu");
const headerMenu = document.querySelector(".header");

burgerMenu.addEventListener("click", function () {
  sideMenu.classList.toggle("open");
  headerMenu.classList.toggle("open");
  this.classList.toggle("open");
});

// Открытие модального окна Войти
const overlay = document.getElementById("overlay");
const signInModal = document.getElementById("signIn");
const signUpModal = document.getElementById("signUp");
const signUpModalMail = document.getElementById("signUpModalMail");
const signInModalMail = document.getElementById("signInModalMail");
const openBtn = document.getElementById("openSignIn");

openBtn.addEventListener("click", () => {
  signInModal.show(); // Открытие модального окна
  overlay.classList.add("active"); // Показываем затемнение
});

function closeModal() {
  signInModal.close(); // Закрытие модального окна
  signUpModal.close(); // Закрытие модального окна
  signUpModalMail.close(); // Закрытие модального окна
  signInModalMail.close(); // Закрытие модального окна
  overlay.classList.remove("active"); // Убираем затемнение
}

overlay.addEventListener("click", closeModal); // Закрытие окна по клику на затемнение

// Переход из окна Войти в Регистрация
const signUpOpen = document.querySelectorAll(
  ".signin__not-account .sign__link"
);
const signUpMail = document.getElementById("signUpMail");
const signInMail = document.getElementById("signInMail");

signUpOpen.forEach((item) => {
  item.addEventListener("click", () => {
    signUpModal.show();
    signInModal.close();
    signInModalMail.close();
  });
});

signUpMail.addEventListener("click", () => {
  signUpModal.close();
  signInModal.close();
  signUpModalMail.show();
});

signInMail.addEventListener("click", () => {
  signUpModal.close();
  signInModal.close();
  signUpModalMail.close();
  signInModalMail.show();
});

// Смена видимости пароля в форме регистрация
const passwordToggles = document.querySelectorAll(".modal__sign-password-btn");

passwordToggles.forEach((toggleButton) => {
  toggleButton.addEventListener("click", () => {
    const passwordInput = toggleButton.previousElementSibling;
    const eyeIcon = toggleButton.querySelector("img");
    const { imgVisible, imgHidden } = toggleButton.dataset;
    const isHidden = passwordInput.type === "password";

    passwordInput.type = isHidden ? "text" : "password";
    eyeIcon.src = isHidden ? imgVisible : imgHidden;
    toggleButton.setAttribute(
      "aria-label",
      isHidden ? "Скрыть пароль" : "Показать пароль"
    );
  });
});


