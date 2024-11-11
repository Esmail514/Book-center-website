var nameError = document.getElementById('username-error');
var passwordError = document.getElementById('password-error');
var password1Error = document.getElementById('password1-error');
var submitError = document.getElementById('submit-error');

function validateName(){
  var name = document.getElementById('username').value;
  if(name.lenth == 0){
    nameError.innerHTML = 'Name is required';
    return false;
  }
  if(!name.match(/^[a-zA-Z0-9]{2,}$/)){
    nameError.innerHTML = 'Username is not correct';
    return false;
  }
  nameError.innerHTML = '<i class="fas fa-check-circle"><i>';
  return true;
}

function validatePass(){
  var pass = document.getElementById('password').value;
  if(pass.lenth == 0){
    passwordError.innerHTML = 'Password is required';
    return false;
  }
  if(!pass.match(/^[a-zA-Z0-9]{2,15}$/)){
    passwordError.innerHTML = 'Password is Weak';
    return false;
  }
 
  passwordError.innerHTML = '<i class="fas fa-check-circle"><i>';
  return true;
}

function validatePass1(){
  var pass1 = document.getElementById('password1').value;
  if(document.getElementById('password').value != pass1){
    
    password1Error.innerHTML = 'Password does not match';
    return false;
  }
  password1Error.innerHTML = '<i class="fas fa-check-circle"><i>';
  return true;
}

function validateForm(){
  if(!validateName() || !validatePass()){
    submitError.innerHTML = 'Fix errors';
    return false;
  }
  return true;
}