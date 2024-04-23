<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="oval.css">
    <title>Oval menu</title>
</head>
<body>
    <div id="header">
        <div id="logo"></div> 
        <h1>Strategic Student Excellence</h1>
    </div>
    <nav id="navigation">
        <a id="links" href="./homepage.html">Home Page</a>
        <a id="links" href="./outingstudent.html">Outing permission</a>
        <a id="links" href="./assignment.html">Assignment Submission</a>
        
    </nav>
         <div class="container"><div>
    <div id="content">
        <div id="image-container">
            <img src="ovel.jpg" alt="ovelimage">
        </div>
        <div id="stick"></div>
        <div id="element">Oval menu:
        
        
        <P> <?php
       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "yoshith";

        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "SELECT * FROM CSP_ovel";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo " " . $row["text"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?><p>
        </div>
        
    </div>
</body>
</html>
