<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE yoshith"; 
if ($conn->query($sql) === true) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error; 
}


$conn->close();
?>
