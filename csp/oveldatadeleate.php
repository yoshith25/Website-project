<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "yoshith";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM CSP_ovel WHERE created_at < NOW()";


if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Record deleated sucessfully"); window.location = "ovelentry.html";</script>';
} else {
    echo '<script>alert("Error"); window.location = "ovelentry.html";</script>';
}


$conn->close();
?>
