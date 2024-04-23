<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "yoshith"; 


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

$conn->select_db($database);


$sql = "CREATE TABLE IF NOT EXISTS csp_assignment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    CSPassignment_data VARCHAR(255),
    due_datetime DATETIME
)";


if ($conn->query($sql) === TRUE) {
    echo "Table csp_assignment created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
