<?php
// Connect to database
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "yoshith";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from form
    $data = $_POST['big-input']; // Corrected form field name

    // Sanitize the data to prevent SQL injection
    $data = $conn->real_escape_string($data);

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO CSP_ovel (text) VALUES (?)"); // Replace 'your_table_name' with your actual table name
    $stmt->bind_param("s", $data);

    // Set parameters and execute
    if ($stmt->execute()) {
        echo '<script>alert("Data is successfully submitted"); window.location = "ovelentry.html";</script>';
    } else {
        echo '<script>alert("Error"); window.location = "ovelentry.html";</script>';
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
