<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="CSS/style2.css">

</head>

<body>
    <table class="content-table">
        <!-- <form method="post">
            <a href="index.php" class="btn">logout</a>
            <span class="yy">|</span> <a href="rejesterAdmin.php" class="Add">Add New Admin</a>
            <a href="add.php" class="btn1">Add book</a> <span class="yy">|</span>
            <input type="text" class="search" name="searchInput" placeholder="Search">
            <input type="submit" value="Search" class="search" name="search">
        </form> -->
        <a href="index.php" class="btn">logout</a>
        <span class="yy">|</span> <a href="rejesterAdmin.php" class="Add">Add New Admin</a>
        <a href="add.php" class="btn1">Add Product</a> <span class="yy">|</span>
        <form action="" method="post">
            <input type="text" name="search" class="search" placeholder="search">
            <input type="submit" name="se" class="search" value="search">
        </form>
        <a href="home.php">
            <h2>Products<span class="I">I</span>Center</h2>
        </a>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Photo</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connect.php";
            if (isset($_POST['se'])) {
                $search = $_POST['search'];
            }
            $sql = "SELECT * FROM users";
            if (!empty($search)) {
                $sql .= " WHERE id LIKE '%$search%' OR  username LIKE '%$search%'";
            }
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;


            ?>

                    <tr class="active-row">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo "\$" . $row['password']; ?></td>
                        <td><?php echo $i; ?></td>


                        <td>
                            <a href=" " class="mod"><img src="./img/mod.png"></a> |
                            <a href="" class="dl"><img src="./img/icon.png"></a>
                        </td>
                    </tr>
                <?php
                }
            } else {


                ?>
                <tr>
                    <td colspan="5" style="text-align: center; color: #f00"><?php echo "No Products found"; ?></td>
                </tr>
            <?php
            }




            ?>
        </tbody>
    </table>

</body>

</html>