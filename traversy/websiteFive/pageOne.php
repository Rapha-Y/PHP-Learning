<?php
    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);
        setcookie('username', $username, time() + 60);
        header('Location: pageTwo.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookies</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="username" placeholder="Enter username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>