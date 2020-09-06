<?php
    $user = ['name' => 'Anni', 'email' => 'anni.709@gmail.com', 'age' => 23];
    $user = serialize($user);

    setcookie('user', $user, time() + 3600);
    
    $user = unserialize($_COOKIE['user']);
    print_r($user);
?>