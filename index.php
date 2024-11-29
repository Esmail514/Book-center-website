<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>

    <?php
    include "connect.php";

    
    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $userSelect = "SELECT * From users where username = '$name' and password = '$pass'";
        $adminSelect = "SELECT * From admin where name = '$name' and password = '$pass'";
        $userResult = mysqli_query($conn, $userSelect);
        if (mysqli_num_rows($userResult) > 0) {
            $row1 = mysqli_fetch_array($userResult);

            $_SESSION['id'] = $row1['id'];
            $_SESSION['username'] = $row1['username'];
            $_SESSION['password'] = $row1['password'];

            echo "<script language=javascript type=text/javascript>

   self.location.href='home.php?id=$_SESSION[id]';

   </script>";
        } else if (mysqli_num_rows(mysqli_query($conn, $adminSelect)) != 0) {
            $row1 = mysqli_fetch_array(mysqli_query($conn, $adminSelect));

            $_SESSION['id'] = $row1['id'];
            $_SESSION['username'] = $row1['name'];
            $_SESSION['password'] = $row1['password'];

            echo "<script language=javascript type=text/javascript>

   self.location.href='admin.php?id=$_SESSION[id]';

   </script>";
        } else {
            echo "<script>alert('Sorry there is no such a user you have to register first');</script>";
            echo "<script language=javascript type=text/javascript>

self.location.href='index.php';

</script>";
        }
    }

    ?>


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