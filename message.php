<?php
    $nameError = $jobError = $rebirthError = '';
    $name = $job = $rebirth = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameError = "you forgetful prick, you need to input a name";
        } else {
            $name = test_input($_POST["name"]);
        }
        
        $job = test_input($_POST["job"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $job)) {
            $jobError = " (...is what I'd call you, but that's not a class that exists)";
        }

        if (empty($_POST["rebirth"])) {
            $rebirthError = "rebirth-input-forgetting";
        } else {
            $rebirth = test_input($_POST["rebirth"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<html>
<body>
    Welcome, 
    <?php echo $job . $jobError . " " .  $name; ?>
    <span class="error"><?php echo $nameError;?></span>
    <br><br>

    You have been registered as 
    <?php echo $rebirth; ?>
    <span class="error"><?php echo $rebirthError;?></span>
    <?php echo "class."; ?>
    <br><br>
</body>
</html>