<?php
require "db.php";

if (!isset($_GET["username"])) {
    die("Missing Username");
}

$username_from = trim($_GET["username"]);

$stmt = $conn->prepare("SELECT id, username, email FROM users WHERE username = ?");
$stmt->bind_param("s", $username_from);
$stmt->execute();
$result = $stmt->get_result();

echo "<h3>Result (Secure)</h3>";

if ($result && $result->num_rows >= 1) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . (int)$row["id"] . "<br>";
        echo "Username: " . htmlspecialchars($row["username"], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Email: " . htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') . "<br>";
        echo "<hr>";
    }
} else {
    echo "No Results";
}

$stmt->close();
$conn->close();
?>
