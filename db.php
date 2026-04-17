<?php
$conn = new mysqli("localhost", "root", "", "membership_db", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>