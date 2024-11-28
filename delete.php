<!-- <?php  session_start();?> -->
<?php
include 'connect.php';
$id = $_GET['id'];
$table = 'products';
$query = "DELETE FROM $table WHERE ID=$id";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
header('location: admin.php');
?>