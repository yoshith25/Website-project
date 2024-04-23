
        <!-- PHP code starts here -->
        <?php
        // Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "yoshith";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from database
        $sql = "SELECT * FROM CSP_ovel";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Data: " . $row["text"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>