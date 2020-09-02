<?php
    $people = array('Rose', 'Lily', 'Luna', 'Aria');
    $numbers = array(4, 7, 13);

    $pillarmen = ['Kars', 'Wamuu'];
    $pillarmen[2] = 'Santana';
    $pillarmen[] = 'Eisidisi';

    $ppl = array('Luffy' => 1, 'Zoro' => 2, 'Nami' => 3);
    $ids = [4 => 'Usopp', 5 => 'Sanji', 6 => 'Vivi'];
    $ppl['Chopper'] = 7;

    $games = array(
        array('Fire Emblem', 'Nintendo'),
        array('Undertale', 'Toby Fox'),
        array('Ragnarok Online', 'Gravity')
    );

    echo $people[0] . ' ';
    echo $numbers[0] . ' ';
    echo $pillarmen[0] . ' ';
    echo $pillarmen[2] . ' ';
    echo $pillarmen[3] . ' ';

    echo count($pillarmen) . ' ';
    print_r($people) . ' ';
    var_dump($people) . ' ';

    echo $ppl['Luffy'] . ' ';
    echo $ids[4] . ' ';
    echo $ppl['Chopper'] . ' ';
    print_r($ppl) . ' ';
    var_dump($ppl) . ' ';

    echo $games[2][0];
?>