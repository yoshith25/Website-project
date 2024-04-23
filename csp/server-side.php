<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "yoshith"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required form fields are set
    if (isset($_POST['CSPassignment_data']) && isset($_POST['due-date'])) {
        $CSPassignment_data = $_POST['CSPassignment_data'];
        $dueDateTime = $_POST['due-date'];

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO csp_assignment (CSPassignment_data, due_datetime) VALUES (?, ?)");
        $stmt->bind_param("ss", $CSPassignment_data, $dueDateTime);

        // Execute the statement
        if ($stmt->execute()) {
            echo '<script>alert("Data is successfully submitted"); window.location = "adminassignment.html";</script>';
        } else {
            echo '<script>alert("error Please try again later"); window.location = "adminassignment.html";</script>';
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: Required form fields are not set.";
    }
}

// Close connection
$conn->close();
?>
