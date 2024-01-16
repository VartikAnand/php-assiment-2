<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h2>Add User</h2>

    <form action="insert.php" method="post">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Add User">
    </form>

    <h2>Search User</h2>

    <form action="search.php" method="post">
        Search by Name: <input type="text" name="search" required>
        <input type="submit" value="Search">
    </form>


    <h2>Users</h2>
    <?php include 'display.php'; ?>
</body>

</html>