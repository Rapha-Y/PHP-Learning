<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <p>
        Thank you, <?php echo $name; ?>. You have subscribed under the e-mail <?php echo $email ?>.
    </p>
    <a href="pageThree.php">Go to page three</a>
</body>
</html>