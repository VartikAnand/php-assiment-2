<?php
include 'connect.php';
$userId = isSet($_GET['id']);

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $id = $_GET['id'];

    $sql="DELETE FROM users WHERE id=$id";

    mysqli_query($con,$sql);

    header("Location:index.php");
    exit();
}
echo "User ID: " . $userId ;

?>