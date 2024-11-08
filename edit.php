<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/all.min.css">
  <link rel="stylesheet" href="CSS/fontawesome.min.css">
</head>
<body>
<div class="container">
  <form action="" method="post">
    <h2>Update Book</h2>

    <div class="input-group">
      <label>Name</label>
  <input type="text" name="Item_name" id="item-name" placeholder="Book Name"  value="" onkeyup="validateName()">
    <span id="Itemname-error"></span>
    </div>

    <div class="input-group">
      <label>Book</label>
      <input type="file" name="item-image" id="item-image" placeholder="Choose the book">
    <span id="image-error"></span>
    </div>
    
    <input type="submit" name="submit" class="btn" value="Update" onclick="return validate()">
    <span id="submit-error"></span>
  </form>
</div>
</body>
</html>