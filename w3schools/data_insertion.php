<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "myDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Person (current_name, current_email)
    VALUES ('Alice', 'alicel@gmail.com')";

    if($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Data insertion error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>