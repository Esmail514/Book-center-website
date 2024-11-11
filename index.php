<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>

    <div class="container">
        <form method="post" id="form">
            <h2>Login Now</h2>

            <div class="input-group">
                <label>UserName</label>
                <input type="text" name="username" id="username" placeholder="UserName">
                <span id="username-error" style="color: red;"></span>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <span id="password-error" style="color: red;"></span>
            </div>
            <input type="submit" name="submit" class="btn" value="Sign-in">
            <a href="rejester.php">Don't you have an account?</a>
    </div>

    <script src="./JS/validate.js"></script>
</body>

</html>