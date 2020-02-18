<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "myDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $statement = $conn->prepare("INSERT INTO Person (current_name, current_email) VALUES (?, ?)");
    $statement->bind_param("ss", $cname, $cmail);

    $cname = "Ruby";
    $cmail = "rwby@gmail.com";
    $statement->execute();

    $cname = "Dipper";
    $cmail = "pines@gmail.com";
    $statement->execute();

    echo "Data inserted successfully";

    $statement->close();
    $conn->close();
?>