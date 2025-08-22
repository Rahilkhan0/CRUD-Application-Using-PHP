<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">⬅ Back</a>
</body>
</html>

<?php
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if($conn->query($sql)){
        header("Location: index.php");
    } else {
        echo "❌ Error: ".$conn->error;
    }
}
?>
