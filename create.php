<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add New User</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>
        <button type="submit" name="submit">Save</button>
    </form>
    <a href="index.php">⬅ Back</a>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name','$email','$phone')";
    if($conn->query($sql)){
        echo "✅ New record created successfully";
        header("Location: index.php");
    } else {
        echo "❌ Error: ".$conn->error;
    }
}
?>
