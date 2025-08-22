<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h3 class="text-success mb-4">➕ Add New User</h3>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
            <a href="index.php" class="btn btn-secondary">⬅ Back</a>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name','$email','$phone')";
    if($conn->query($sql)){
        header("Location: index.php");
        exit;
    } else {
        echo "❌ Error: ".$conn->error;
    }
}
?>
