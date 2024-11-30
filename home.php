<?php session_start(); ?>
<?php
include 'connect.php';
$table = 'products';
if (isset($_REQUEST['id'])) {
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/home.css">
        <title>Products</title>
    </head>

    <body>
        <header>
            <a href="#" class="logo">Esmail <span>Center</span></a>

        </header>
        <section class="Menu">
            <h2 class="title">All Products</h2>
            <?php
            if ($count != 0) {
                while ($row = mysqli_fetch_assoc($result)):
            ?>
                    <div class="content">
                        <div class="food-card">

                            <div class="food-image">
                                <img src="<?php echo "upload/" . $row['photo'] ?>" alt="Product Photo">
                            </div>
                            <div class="food-info">
                                <p class="food-category"><?php echo $row['name']; ?></p>
                                <strong class="food-price">
                                    <?php echo $row['price']; ?>
                                </strong>
                            </div>
                        </div>
                <?php

                endwhile;
            }
                ?>
                    </div>
        </section>
        <div class="footer">
            <footer>
                <div class="copyrights">
                    &copy;copyright @ 2024 <span>Esmail A. Alsayaghi</span> | all rights reversed!
                </div>
            </footer>
        </div>
    <?php
} else {
    session_unset();
    session_destroy();
    echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\" />";
}
    ?>
    </body>

    </html>