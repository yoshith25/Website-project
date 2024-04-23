<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>
    <h2>Display Data</h2>
    <?php
    if(isset($_POST['data'])) {
        $data = $_POST['data'];
        echo "<p>The entered data is: $data</p>";
    } else {
        echo "<p>No data entered.</p>";
    }
    ?>
</body>
</html>
