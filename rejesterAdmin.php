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
    $name = $_POST['name'];
    $password = $_POST['password'];

    $insert = "INSERT INTO $table (name, password) VALUES ('$name' , '$password')";
    mysqli_query($conn, $insert);
}
?>

<div class="container">
        <form method="post">
            <h2>New admin</h2>

            <div class="input-group">
                <label>UserName</label>
                <input type="text" name="name" id="name" placeholder="Name" onkeyup="validateName()">
                <span id="username-error"></span>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password" onkeyup="validatePass()">
                <span id="password-error"></span>
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="Confirmpassword" id="password" placeholder="Confirm Password" onkeyup="validatePass()">
                <span id="Confirmpassword-error"></span>
            </div>
            <input type="submit" name="submit" class="btn" value="Add admin" onclick="return validateForm()">
            <span id="submit-error"></span>
    </div>
</body>
</html>