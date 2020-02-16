<!DOCTYPE html>

<?php
    $cookie_name = "name";
    $cookie_value = "Sigma";
    setcookie($cookie_name, $cookie_value, time() + (60), "/");

    session_start();
?>  

<html lang="us">
    <head>

    </head>
    <body>
        <?php 
            $_SESSION["favclass"] = "mechanic";
            $_SESSION["favanimal"] = "cat";
            echo "Sessions variables are set.<br>";
        ?>
        <?php
            include "shout.php";
            
            date_default_timezone_set("America/Sao_Paulo");
            echo "You have accessed this page at " . date("H:i:s") . " of " . date("d/m/Y") . ", São Paulo time.<p>";

            $txtFile = fopen("acronyms.txt", "r") or die("Unable to open acronyms.txt");
            while (!feof($txtFile)) {
                echo fgets($txtFile) . "<br>";
            }
            fclose($txtFile);
        ?>

        <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:<br>
            <input type="file" name="imageFile" id="imageFile"><br>
            <input type="submit" name="Upload Image" name="submit"><p>
        </form>

        <?php
            if (count($_COOKIE) > 0) {
                echo "Cookies are enabled.<br>";
                if (!isset($_COOKIE[$cookie_name])) {
                    echo "Cookie named '" . $cookie_name . "' isn't set.";
                } else {
                    echo "Cookie named '" . $cookie_name . "' is set.<br>";
                    echo "Value is " . $_COOKIE[$cookie_name];
                }
            } else {
                echo "Cookies are disabled. ";
            }
        ?>

        <?php
            $ip = "127.0.0.1";
            if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
                echo("<hr>$ip is a valid IP address");
            } else {
                echo("<hr>$ip isn't a valid IP address");
            }
        ?>
        <p>
        <?php
            $numbers = array(1,2,3,4,5,6,7);
            echo json_encode($numbers);
        ?>
    </body>
</html>