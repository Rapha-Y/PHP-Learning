<?php
    if (isset($_POST['submit'])) {
        session_start();
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: pageTwo.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="email" placeholder="Enter your e-mail">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>