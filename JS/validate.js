var form = document.getElementById("form");
var nameInput = document.getElementById("username");
var password = document.getElementById("password");
var nameError = document.getElementById("username-error");
var passwordError = document.getElementById("password-error");


form.addEventListener("submit", (e) => {
  if (nameInput.value === "" || nameInput.value == null) {
    e.preventDefault();
    nameError.innerHTML = "Enter UserName";
  } else if (!nameInput.value.match(/^[a-zA-Z0-9]{2,}$/)) {
    nameError.innerHTML = "Enter valide UserName";
  } else {
    nameError.innerHTML = "";
  }
  if (password.value === "" || password.value == null) {
    e.preventDefault();
    passwordError.innerHTML = "Enter Password";
  } else if (password.value.length < 3) {
    passwordError.innerHTML = "Enter more than 3 characters";
  } else {
    passwordError.innerHTML = "";
  }
});
