<?php

$servername= 'localhost';
$username= 'root';
$password='';
$dbname='yoshith';
$fname= $_POST['firstname'] ?? '';
$lname= $_POST['lastname'] ?? '';
$user_email= $_POST['email'] ?? '';
$user_pass= $_POST['password_hash'] ?? '';
$user_repass= $_POST['Repassword'] ?? ''; 

$conn= new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die('Connection to database failed'. $conn->connect_error);
}

$stmt= $conn->prepare("INSERT INTO CSP (firstname,lastname,email,password_hash,Repassword) VALUES  (?,?,?,?,?)");

$stmt->bind_param("sssss", $fname, $lname, $user_email, $user_pass, $user_repass); 

$stmt->execute();

echo "New user created Succesfully";

$stmt->close();
$conn->close();

?>
