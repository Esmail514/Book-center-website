<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
<div class="container">
        <form method="post">
            <h2>New account</h2>

            <div class="input-group">
                <label>UserName</label>
                <input type="text" name="username" id="username" placeholder="UserName" onkeyup="validateName()">
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
            <input type="submit" name="submit" class="btn" value="Sign-up" onclick="return validateForm()">
            <span id="submit-error"></span>
            <a href="index.php">Have an account?</a>
    </div>
</body>
</html>