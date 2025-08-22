<?php
$servername = "localhost";
$username = "root";   // change if needed
$password = "Rahil@k1h2a3n4";       // change if needed
$dbname = "phpDatabase"; // change if needed

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>
