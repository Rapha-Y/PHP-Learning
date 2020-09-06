<?php 
    setcookie('username', 'Emily', time() + 3600);
    setcookie('username', 'Emily', time() - 3600); //Negative time = unsetting

    if (count($_COOKIE) > 0) {
        echo 'There are ' . count($_COOKIE) . ' cookies saved';
    } else {
        echo 'There are no cookies saved';
    }
    echo '<br>';

    if (isset($_COOKIE['username'])) {
        echo 'User ' . $_COOKIE['username'] . ' is set<br>';
    } else {
        echo 'User is not set';
    }
?>