<?php
    session_start();

    echo "Favorite class is " . $_SESSION["favclass"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["imageFile"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imageFile"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOK = 1;
        } else {
            echo "File is not an image.";
            $uploadOK = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "A file of the same name already exists.";
        $uploadOK = 0;
    }
    if ($_FILES["imageFile"]["size"] > 1000000) {
        echo "Your file is too large.";
        $uploadOK = 0;
    }
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "JPG, JPEG and PNG only.";
        $uploadOK = 0;
    }

    session_unset();
    session_destroy();
?>