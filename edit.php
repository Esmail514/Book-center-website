<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <?php
  include 'connect.php';
  $id = $_GET['id'];
  $table = 'products';
  if (isset($_REQUEST['id'])) {
    $adminID = $_REQUEST['id'];
    if (isset($_POST['submit'])) {
      $Item_name = $_POST['name'];
      $Item_price = $_POST['price'];

      $query_update = "UPDATE $table SET name='$Item_name', price='$Item_price' WHERE id=$id";
      $result_update = mysqli_query($conn, $query_update);

      $query = "SELECT * FROM $table WHERE ID=$id";
      $result = mysqli_query($conn, $query);
      echo "<meta http-equiv=\"refresh\" content=\"0;url=admin.php?id=$adminID\" />";
    } else {
      $query = "SELECT * FROM $table WHERE id =$id";
      $result = mysqli_query($conn, $query);
    }
    $row = mysqli_fetch_assoc($result);
    isset($result_update) ? $message = '<p class="message">Update success</p>' : $message = '';
  ?>
    <div class="container">
      <form action="" method="post" id="form">
        <?php echo $message; ?>
        <h2>Update Product</h2>

        <div class="input-group">
          <label>Name</label>
          <input type="text" name="name" id="name" placeholder="Book Name">
          <span id="name-error" style="color: red;"></span>
        </div>

        <div class="input-group">
          <label>Name</label>
          <input type="text" name="price" id="price" placeholder="Price">
          <span id="price-error" style="color: red;"></span>
        </div>

        <div class="input-group">
          <label>Book</label>
          <input type="file" name="item-image" id="item-image" placeholder="Choose a Product">
          <span id="file-error" style="color: red;"></span>
        </div>

        <input type="submit" name="submit" class="btn" value="Update">
      </form>
    </div>
  <?php
  } else {
    session_unset();
    session_destroy();
    echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\" />";
    mysqli_close($conn);
  }
  //           
  ?>
  <script src="./JS/addValidate.js"></script>
</body>

</html>