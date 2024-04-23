<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "yoshith";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM CSP WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Query preparation failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password_db = $row['password_hash'];

        if (password_verify($password, $hashed_password_db)) {
            header("Location: homepage.html");
            exit();
        } else {
            echo '<script>alert("Invalid password or username"); window.location = "login.html";</script>';
            exit();
        }
    } else {
        echo '<script>alert("No user found"); window.location = "login.html";</script>';
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
