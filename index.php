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

<!DOCTYPE html>

<html>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name" value="<?php echo $name;?>"><br>
        Job: <input type="text" name="job" value="<?php echo $job;?>"><br>
        
        Rebirth status:
        <input type="radio" name="rebirth" value="trans"
        <?php if (isset($rebirth) && $rebirth=="trans") echo "checked";?>
        value="trans">Trans
        <input type="radio" name="rebirth" 
        <?php if (isset($rebirth) && $rebirth=="expand") echo "checked";?>
        value="expand">Expanded
        <input type="radio" name="rebirth" 
        <?php if (isset($rebirth) && $rebirth=="other") echo "checked";?>
        value="other">Other
        <br>
        <input type="submit"><hr>
    </form>

    Welcome, 
    <?php echo $job . $jobError . " " .  $name; ?>
    <span class="error"><?php echo $nameError;?></span>
    <br>

    You have been registered as 
    <?php echo $rebirth; ?>
    <span class="error"><?php echo $rebirthError;?></span>
    <?php echo "class."; ?>
    <br><br>
<body>
<html>