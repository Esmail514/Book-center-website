var form = document.getElementById("form");
var nameInput = document.getElementById("username");
var password = document.getElementById("password");
var nameError = document.getElementById("username-error");
var passwordError = document.getElementById("password-error");
var confirmPassword = document.getElementById("ConfirmPassword");
var confirmPasswordError = document.getElementById("Confirmpassword-error");
var errors = document.getElementById("submit-error");

form.addEventListener("submit", (e) => {
  if (nameInput.value === "" || nameInput.value == null) {
    e.preventDefault();
    nameError.innerHTML = "Enter UserName";
  } else if (!nameInput.value.match(/^[a-zA-Z0-9]{2,}$/)) {
    e.preventDefault();
    nameError.innerHTML = "Enter valide UserName";
  } else {
    nameError.innerHTML = "";
  }

  if (password.value === "" || password.value == null) {
    e.preventDefault();
    passwordError.innerHTML = "Enter Password";
  } else {
    passwordError.innerHTML = "";
  }

  if (password.value != confirmPassword.value) {
    e.preventDefault();
    passwordError.innerHTML = "--";
    confirmPasswordError.innerHTML = "--";
    errors.innerHTML = "Passwords do not MATCH";
  } else {
    passwordError.innerHTML = "";
    confirmPasswordError.innerHTML = "";
    errors.innerHTML = "";
  }
});
