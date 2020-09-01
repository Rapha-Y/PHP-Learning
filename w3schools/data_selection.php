<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "myDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Person";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["current_name"] . " - E-mail: " . $row["current_email"] . "<br>";
        }
    } else {
        echo "No results";
    }

    $conn->close();
?>