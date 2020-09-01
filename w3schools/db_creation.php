<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";

    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE myDatabase";
    if($conn->query($sql) === TRUE) {
        echo "Database created successfuly";
    } else {
        echo "Database creation error: " . $conn->error;
    }

    $conn->close();
?>