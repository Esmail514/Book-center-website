var form = document.getElementById("form");
var Name = document.getElementById("item-name");
var nameError = document.getElementById("Itemname-error");
var price = document.getElementById("item-price");
var priceError = document.getElementById("price-error");
var file = document.getElementById("image");
var file_error = document.getElementById("image-error");

form.addEventListener("submit", (e) => {
    if (Name.value === "" || Name.value == null) {
        e.preventDefault();
        nameError.innerHTML = "Enter Book Name";
      } else if (!nameInput.value.match(/^[a-zA-Z0-9]{2,}$/)) {
        nameError.innerHTML = "Enter valide Book Name";
      } else {
        nameError.innerHTML = "";
      }

      if (price.value === "" || price.value == null) {
        e.preventDefault();
        priceError.innerHTML = "Enter Book Name";
      } else {
        priceError.innerHTML = "";
      }

    if(file.files && file.files[0]){
        file_error.innerHTML = "";
    }
    else{
        e.preventDefault();
        file_error.innerHTML = "Choose a Book";
    }
})