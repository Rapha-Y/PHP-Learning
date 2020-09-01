<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "myDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE Person SET current_name = 'Aliza' WHERE id = 1";

    if($conn->query($sql) === TRUE) {
        echo "Data updated successfully";
    } else {
        echo "Data update error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>