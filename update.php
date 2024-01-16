<?php
include 'connect.php';

$user_id = isset($_GET['id']); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    $res = mysqli_query($con, $sql);


    header("Location: index.php");
    exit();
}

// Retrieve user information for display
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h1>Update User <?php echo $user['id']; ?></h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>