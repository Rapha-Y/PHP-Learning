<?php
    for ($i = 0; $i < 10; $i++) {
        echo $i . ' ';
    }
    echo '<br>';

    $i = 0;
    while ($i < 10) {
        echo $i . ' ';
        $i++;
    }
    echo '<br>';

    $i = 0;
    do {
        echo $i . ' ';
        $i++;
    } while ($i < 10);
    echo '<br>';

    $people = array('Aria', 'Lily', 'Luna', 'Rose');
    foreach ($people as $person) {
        echo $person . '<br>';
    }

    $heroes = array(
        'Aria' => 'Black Dagger', 
        'Lily' => 'Golden Hurricane', 
        'Luna' => 'Eternal Winter', 
        'Rose' => 'Crimson Knight'
    );
    foreach ($heroes as $hero => $title) {
        echo $hero . ': ' . $title . '<br>';
    }
?>