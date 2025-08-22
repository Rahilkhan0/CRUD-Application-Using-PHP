<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP CRUD App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">User Management</h2>
        <a href="create.php" class="btn btn-success">➕ Add New User</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['phone']."</td>
                            <td>
                                <a href='update.php?id=".$row['id']."' class='btn btn-sm btn-primary'>✏️ Edit</a>
                                <a href='delete.php?id=".$row['id']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Delete this user?\");'>🗑 Delete</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
