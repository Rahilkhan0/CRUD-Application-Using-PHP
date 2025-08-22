<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD in PHP</title>
</head>
<body>
    <h2>User List</h2>
    <a href="create.php">➕ Add New User</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>
                    <a href='update.php?id=".$row['id']."'>✏️ Edit</a> | 
                    <a href='delete.php?id=".$row['id']."'>🗑 Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
