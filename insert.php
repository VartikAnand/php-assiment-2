<?php 
include 'connect.php';

if($_SERVER['REQUEST_METHOD']==='POST'){

    $name = $_POST['name'];
    $email=$_POST['email'];

$sql = "INSERT INTO users(name,email) VALUES('$name','$email')";

$insertData = mysqli_query($con,$sql);




header('Location:index.php');
}

?>