<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "myDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE TABLE Person(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        current_name VARCHAR(30) NOT NULL,
        current_email VARCHAR(50)
    )";

    if($conn->query($sql) === TRUE) {
        echo "Person table created successfully";
    } else {
        echo "Table creation error: " . $conn->error;
    }

    $conn->close();
?>