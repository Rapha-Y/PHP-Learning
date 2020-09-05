<?php
    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'guest user';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <p>
        Hello <?php echo $name; ?>!
    </p>
</body>
</html>