<?php
    $num = 4;
    $letter = '4';

    if ($num == 4) {
        echo 'num is equal to 4';
    }
    echo '<br>';

    if ($letter == 4) {
        echo 'letter is equal to 4';
    }
    echo '<br>';

    if ($letter === 4) {
        echo 'letter is identical to 4';
    } else {
        echo 'letter is not identical to 4';
    }
    echo '<br>';

    if ($num < 4) {
        echo 'num is less than 4';
    } elseif ($num > 4) {
        echo 'num is greater than 4';
    } else {
        echo 'num is exactly 4';
    }
    echo '<br>';

    $aaa = 3;
    $bbb = 5;
    if ($aaa == 3 XOR $bbb == 5) {
        echo 'either (aaa is three) or (bbb is five)';
    } else {
        echo 'either (aaa isn\'t three and bbb isn\'t five) or (aaa is three and bbb is five)';
    }
    echo '<br>';

    $part = 7;
    switch ($part) {
        case 1:
            echo 'Phantom Blood';
            break;
        case 2:
            echo 'Battle Tendency';
            break;
        case 3:
            echo 'Stardust Crusaders';
            break;
        case 4:
            echo 'Diamond is Unbreakable';
            break;
        case 5:
            echo 'Golden Wind';
            break;
        case 6:
            echo 'Stone Ocean';
            break;
        case 7:
            echo 'Steel Ball Run';
            break;
        case 8:
            echo 'Jojolion';
            break;
        default:
            echo 'Unknown Part';
    }
    echo '<br>';
?>