<?php session_start(); ?>
<?php
include 'connect.php';
if (isset($_REQUEST['id'])) {
    $adminID = $_REQUEST['id'];
    $id = $_GET['id'];
    $table = 'products';
    $query = "DELETE FROM $table WHERE ID=$id";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header('location: admin.php?id=$adminID');
}
?>