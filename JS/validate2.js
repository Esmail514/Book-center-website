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
  if (confirmPassword.value === "" || confirmPassword.value == null) {
    e.preventDefault();
    confirmPasswordError.innerHTML = "Enter Password";
  } else if (confirmPassword.value.length < 3) {
    passwordError.innerHTML = "Enter more than 3 characters";
  } 
  else {
    confirmPasswordError.innerHTML = "";
  }
  if(password.value.length < 3 || confirmPassword.value.length < 3 ){
    if(password.value != confirmPassword.value){
        e.preventDefault();
        passwordError.innerHTML = "--";
        confirmPasswordError.innerHTML = "--";
        errors.innerHTML = "Passwords do not MATCH";
      }else{
        passwordError.innerHTML = "";
        confirmPasswordError.innerHTML = "";
        errors.innerHTML = "";
      }
  }
});
