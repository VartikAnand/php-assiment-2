<?php 
$con = mysqli_connect('localhost','root','','user');


if(!$con){
    die('Could not connect to database : ' . mysqli_connect_error());
}


?>