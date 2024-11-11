<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>


<?php
include 'connect.php';
$table = "users";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = "INSERT INTO $table (username, password) VALUES ('$username' , '$password')";
    mysqli_query($conn, $insert);
}
?>

<div class="container">
        <form method="post" id="form">
            <h2>New account</h2>

            <div class="input-group">
                <label>UserName</label>
                <input type="text" name="username" id="username" placeholder="UserName" >
                <span id="username-error" style="color: red;"></span>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password" >
                <span id="password-error" style="color: red;"></span>
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="Confirmpassword" id="ConfirmPassword" placeholder="Confirm Password" >
                <span id="Confirmpassword-error" style="color: red;"></span>
            </div>
            <input type="submit" name="submit"  class="btn" value="Sign-up" >
            <span id="submit-error" style="color: red;"></span>
            <a href="index.php">Have an account?</a>
    </div>
    <script src="./JS/validate2.js"></script>
</body>
</html>