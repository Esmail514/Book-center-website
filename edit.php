<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="container">
  <form action="" method="post" id="form">
    <h2>Update Book</h2>

    <div class="input-group">
      <label>Name</label>
  <input type="text" name="name" id="name" placeholder="Book Name">
    <span id="name-error" style="color: red;"></span>
    </div>

    <div class="input-group">
      <label>Book</label>
      <input type="file" name="file" id="file" placeholder="Choose a book">
    <span id="file-error" style="color: red;"></span>
    </div>
    
    <input type="submit" name="submit" class="btn" value="Update" >
  </form>
</div>
<script src="./JS/addValidate.js"></script>
</body>
</html>