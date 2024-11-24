<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="CSS/style3.css">

</head>

<body>
    <section class="Menu">
        <h2 class="title">Menu</h2>
        <!-- <?php
                if ($count != 0) {
                    while ($row = mysqli_fetch_assoc($result)):
                ?> -->
        <div class="content">
            <div class="food-card">
                <div class="food-image">
                    <?php echo "<img src='upload/" . $row['item_image'] . "' >"; ?>
                    <img src="../favicon.ico" alt="">
                </div>
                <div class="food-info">
                    <p class="food-category"><?php echo $row['Item_name']; ?> Esmail</p>
                    <strong class="food-price">
                        <?php echo $row['item_price']; ?>500
                    </strong>
                </div>
            </div>
    <?php

                    endwhile;
                }
    ?>
        </div>
    </section>

</body>

</html>