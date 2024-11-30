<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">
  <title>Add products</title>
</head>

<body>
  <?php
  include 'connect.php';
  $table = 'products';
  if (isset($_REQUEST['id'])) {
    $adminID = $_REQUEST['id'];
    if (isset($_POST['submit'])) {
      $Item_name = $_POST['Item_name'];
      $Item_price = $_POST['item_price'];
      $output_dir = "upload/";
      $ImageName      = str_replace(' ', '-', strtolower($_FILES['image']['name'][0]));
      $img_type = $_FILES['image']['type'][0];
      $img_ex = substr($ImageName, strrpos($ImageName, '.'));
      $img_ex = str_replace('.', '', $img_ex);
      $new_img = $ImageName . '.' . $img_ex;
      $ret[$new_img] = $output_dir . $ImageName;
      if (!file_exists($output_dir)) {
        @mkdir($output_dir, 0777);
      }

      move_uploaded_file($_FILES["image"]["tmp_name"][0], $output_dir . "/" . $new_img);
      $query = "INSERT INTO $table (name, price,photo) VALUES ('$Item_name', '$Item_price','$ImageName')";
      $result = mysqli_query($conn, $query);
      echo "<meta http-equiv=\"refresh\" content=\"0;url=admin.php?id=$adminID\" />";
    }
    isset($result) ? $message = '<p class="message">Save success</p>' : $message = '';
  ?>
    <div class="container">
      <form action="" method="post" enctype="multipart/form-data" id="form">
        <?php echo $message; ?>
        <h2>Add Items</h2>

        <div class="input-group">
          <label>Item Name</label>
          <input type="text" name="Item_name" id="item-name" placeholder="Name">
          <span id="Itemname-error" style="color: red;"></span>
        </div>

        <div class="input-group">
          <label>Item Price</label>
          <input type="text" name="item_price" id="item-price" placeholder="Price">
          <span id="price-error" style="color: red;"></span>
        </div>

        <div class="input-group">
          <label>Item Price</label>
          <input type="file" name="image[]" id="image">
          <span id="image-error" style="color: red;"></span>
        </div>

        <input type="submit" name="submit" class="btn" value="Add">
        <span id="submit-error" style="color: red;"></span>
      </form>
    </div>
  <?php
  } else {
    session_unset();
    session_destroy();
    mysqli_close($conn);
    echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\" />";
  }
  ?>
  <script src="JS/addValidate.js"></script>
</body>

</html>