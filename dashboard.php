<?php
include 'db.php';

$email = $_GET['email'];

$sql = "SELECT users.name, tiers.name AS tier_name
        FROM users
        JOIN tiers ON users.tier_id = tiers.id
        WHERE email='$email'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h2>Welcome " . $row['name'] . "</h2>";
echo "<h3>Plan: " . $row['tier_name'] . "</h3>";

if ($row['tier_name'] == "Free") {
    echo "Access: Basic Features";
}
elseif ($row['tier_name'] == "Silver") {
    echo "Access: Silver Features";
}
elseif ($row['tier_name'] == "Gold") {
    echo "Access: Premium Features";
}
else {
    echo "Access: All Features + Priority Support";
}
?>