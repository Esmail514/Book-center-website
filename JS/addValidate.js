var form = document.getElementById("form");
var bookName = document.getElementById("name");
var nameError = document.getElementById("name-error");
var file = document.getElementById("file");
var file_error = document.getElementById("file-error");

form.addEventListener("submit", (e) => {
    if (bookName.value === "" || bookName.value == null) {
        e.preventDefault();
        nameError.innerHTML = "Enter Book Name";
      } else if (!nameInput.value.match(/^[a-zA-Z0-9]{2,}$/)) {
        nameError.innerHTML = "Enter valide Book Name";
      } else {
        nameError.innerHTML = "";
      }

    if(file.files && file.files[0]){
        file_error.innerHTML = "";
    }
    else{
        e.preventDefault();
        file_error.innerHTML = "Choose a Book";
    }
})