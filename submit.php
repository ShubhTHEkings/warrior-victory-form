<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "Pass@123";
$dbname = "facebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];
$phone = $_POST['phone'];

// Prepare and bind (optional: protects from SQL injection)
$stmt = $conn->prepare("INSERT INTO users (id, name, age, city, phone) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("isiss", $id, $name, $age, $city, $phone);

// Execute
if ($stmt->execute()) {
    echo "<h2>✅ Data Inserted Successfully!</h2>";
    echo "<p><strong>ID:</strong> $id<br>";
    echo "<strong>Name:</strong> $name<br>";
    echo "<strong>Age:</strong> $age<br>";
    echo "<strong>City:</strong> $city<br>";
    echo "<strong>Phone:</strong> $phone</p>";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
