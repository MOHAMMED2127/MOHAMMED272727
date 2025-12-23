<?php
require "db.php";

$username = $_GET["username"];

$sql = "SELECT * FROM users WHERE username = '$username'";
echo $sql; // 👈 سطر مهم جدًا للتجربة

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" . $row["username"];
    }
} else {
    echo "<br>No Results";
}
?>
