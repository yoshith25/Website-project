<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yoshith"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, CSPassignment_data, due_datetime FROM csp_assignment";
$result = $conn->query($sql);

$notifications = array();

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $due_DateTime = strtotime($row["due_datetime"]);
        $currentTime = time();
        
        
        $timeDiff12hr = $due_DateTime - (12 * 3600);
        $timeDiff3hr = $due_DateTime - (3 * 3600);
        $timeDiff1hr = $due_DateTime - (1 * 3600);
        
        
        if ($currentTime >= $timeDiff12hr) {
            $notifications[] = array("timeDiff" => "12hr", "id" => $row["id"], "assignmentData" => $row["CSPassignment_data"]);
        }
        
        if ($currentTime >= $timeDiff3hr) {
            $notifications[] = array("timeDiff" => "3hr", "id" => $row["id"], "assignmentData" => $row["CSPassignment_data"]);
        }
        
        if ($currentTime >= $timeDiff1hr) {
            $notifications[] = array("timeDiff" => "1hr", "id" => $row["id"], "assignmentData" => $row["CSPassignment_data"]);
        }
    }
}

echo json_encode($notifications);

$conn->close();
?>
