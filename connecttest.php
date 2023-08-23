<?php
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin (CORS)
header("Content-Type: application/json");

// Database configuration
$servername = "	sql211.infinityfree.com";
$username = "if0_34788276";
$password = "@Monique123";
$dbname = "if0_34788276_mrWhite";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle review submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $review = $_POST["review"];
    $rating = $_POST["rating"];

    // Use prepared statement to insert data
    $insert_sql = "INSERT INTO Customerreviews (customer_name, review_text, rating, timestamp) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($insert_sql);
    $stmt->bind_param("ssd", $name, $review, $rating);

    if ($stmt->execute()) {
        // Review inserted successfully
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
}

// Fetch reviews
$select_sql = "SELECT customer_name, review_text, rating, timestamp FROM Customerreviews ORDER BY timestamp DESC";
$result = $conn->query($select_sql);

$data = array(); // Store fetched data here

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

// Close the database connection
$conn->close();
?>