<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$tier_id = $_POST['tier_id'];

$sql = "INSERT INTO users (name, email, tier_id)
        VALUES ('$name', '$email', '$tier_id')";

if ($conn->query($sql) === TRUE) {
    echo "Subscription Successful!<br>";
    echo "<a href='dashboard.php?email=$email'>Go to Dashboard</a>";
} else {
    echo "Error: " . $conn->error;
}
?>