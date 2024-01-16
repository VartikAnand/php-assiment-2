<?php
include 'connect.php';

$sql = "SELECT * FROM users";

$res = mysqli_query($con,$sql);
echo '<ul>';
while($row = mysqli_fetch_assoc($res)){
    echo '<li>' . $row['name'] . ' - ' . $row['email'] .  '[ <a href="update.php?id='.$row['id'].'">Update </a> ] ' .'[ <a href="delete.php?id='.$row['id'].'">Delete</a> ] '.   '</li>';
}
echo '</ul>';


?>