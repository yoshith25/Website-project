<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashboard</title>
    <link rel="stylesheet" href="outingstudent.css">
</head>
<body>
    <div class="container">
        <h2>Student Outing Requests</h2>
        <table>
            <tr>
                <th>Student Name</th>
                <th>Reason</th>
                <th>Action</th>
            </tr>
            <?php
                
                $students = array(
                    array("John Doe", "Visit to the museum"),
                    array("Jane Smith", "Picnic at the park")
                );

                foreach ($students as $student) {
                    echo "<tr>";
                    echo "<td>" . $student[0] . "</td>";
                    echo "<td>" . $student[1] . "</td>";
                    echo "<td><button>Accept</button><button>Reject</button></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
