<?php
    if (isset($_GET)) {
        $name = htmlentities($_GET['name']);
        echo $name;
    }

    /*
    if (isset($_POST)) {
        $name = htmlentities($_POST['name']);
        echo $name;
    }
    */

    //REQUEST works whether the method is GET or POST
    /*
    if (isset($_REQUEST)) {
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }
    */

    /*
    echo $_SERVER['QUERY_STRING'];
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Meu Teiaterreno</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>E-mail</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Anni">Anni</a>
        </li>
        <li>
            <a href="get_post.php?name=Emily">Emily</a>
        </li>
    </ul>
    <?php echo "{$name}'s Profile"; ?>
</body>
</html>