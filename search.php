<?php
include 'connect.php';

if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    $sql = "SELECT * FROM users WHERE name LIKE '%$searchTerm%' OR id = '$searchTerm' OR email LIKE '%$searchTerm%'";
    $res = mysqli_query($con, $sql);


    while ($row = mysqli_fetch_assoc($res)) {
        echo "ID: {$row['id']}, Name: {$row['name']}, Email: {$row['email']}<br>";
    }
}

header('Location:index.php');

?>