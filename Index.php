<?php
include 'db.php';

// Create a simple table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS visitors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
)");

// Insert a dummy visitor
$conn->query("INSERT INTO visitors (name) VALUES ('Visitor at " . date('Y-m-d H:i:s') . "')");

// Read all visitors
$result = $conn->query("SELECT * FROM visitors");

echo "<h1>Welcome to my simple PHP + MySQL site!</h1>";
echo "<h2>Visitors log:</h2>";
echo "<ul>";
while($row = $result->fetch_assoc()) {
    echo "<li>ID: " . $row['id'] . " - Name: " . $row['name'] . "</li>";
}
echo "</ul>";

$conn->close();
?>
