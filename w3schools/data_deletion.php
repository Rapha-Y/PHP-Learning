<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "myDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM Person WHERE id = 3";

    if($conn->query($sql) === TRUE) {
        echo "Data deleted successfully";
    } else {
        echo "Data deletion error: " . $conn->error;
    }

    $conn->close();
?>