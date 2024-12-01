<?php session_start(); ?>
<?php
include "connect.php";
$name = $_SESSION['name'];
if(isset($name)){
    echo "";
}else{
    header("Location: index.php");
}



?>
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

            <form action="" method="post">
                <input type="submit" name="logout" value="logout" class="btn">
                <span class="yy">|</span> <a href="rejesterAdmin.php?id=$id" class="Add">Add New Admin</a>
                <a href="add.php?id=$id" class="btn1">Add Product</a> <span class="yy">|</span>
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
                if (isset($_POST['se'])) {
                    $search = $_POST['search'];
                }
                $sql = "SELECT * FROM products";
                if (!empty($search)) {
                    $sql .= " WHERE id LIKE '%$search%' OR  name LIKE '%$search%'";
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
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo "\$" . $row['price']; ?></td>
                            <td><?php echo "<img src='upload/" . $row['photo'] . "' width='100px' height='100px'>"; ?></td>


                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>" class="mod"><img src="./img/mod.png"></a> |
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="dl"><img src="./img/icon.png"></a>
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
             
            if (isset($_POST['logout'])) {
                session_unset();
                session_destroy();

                echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\" />";
            }
            ?>
            </tbody>
        </table>

    </body>

    </html>