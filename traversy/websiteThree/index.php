<?php
    $msg = '';
    $msgClass = '';

    //Checks for submission
    if (filter_has_var(INPUT_POST, 'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Checks for completion
        if (!empty($name) && !empty($email) && !empty($message)) {
            //Checks for e-mail validation
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Please use a valid e-mail';
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'annihilator.709@gmail.com';
                $subject = 'Contact request from' . $name;
                $body = 
                    '<h2>Contact Request</h2>
                    <h4>Name</h4><p>' . $name . '</p>
                    <h4>E-mail</h4><p>' . $email . '</p>
                    <h4>Message</h4><p>' . $message . '</p>'
                ;

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                if (mail($toEmail, $subject, $body, $headers)) {
                    $msg = "Your e-mail has been sent";
                    $msgClass = "alert-success";
                } else {
                    $msg = "Your e-mail was not sent";
                    $msgClass = "alert-danger";
                }
            }
        } else {
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Me</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($msg != '') : ?>
            <div class="alert <?php echo $msgClass; ?>">
                <?php echo $msg ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    value="<?php echo isset($_POST['name']) ? $name : ''; ?>"
                >
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="email" 
                    value="<?php echo isset($_POST['email']) ? $email : ''; ?>"
                >
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control">
                    <?php echo isset($_POST['message']) ? $message : ''; ?>
                </textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>