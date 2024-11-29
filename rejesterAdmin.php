<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
</head>
<body>

<?php
include 'connect.php';
$table = "admin";
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $insert = "INSERT INTO $table (name, password) VALUES ('$name' , '$password')";
    mysqli_query($conn, $insert);
}
?>

<div class="container">
        <form method="post" id="form">
            <h2>New admin</h2>

            <div class="input-group">
                <label>UserName</label>
                <input type="text" name="username" id="username" placeholder="Name">
                <span id="username-error" style="color: red;"></span>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <span id="password-error" style="color: red;"></span>
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password" >
                <span id="Confirmpassword-error" style="color: red;"></span>
            </div>
            <input type="submit" name="submit" class="btn" value="Add admin" >
            <span id="submit-error" style="color: red;"></span>
    </div>
    <script src="./JS/validate2.js"></script>
</body>
</html>