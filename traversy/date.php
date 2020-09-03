<?php
    date_default_timezone_set('America/Sao_Paulo');

    echo date('d') . '/';
    echo date('m') . '/';
    echo date('Y') . ' ';
    echo date('l');
    echo '<br>';

    echo date('d/m/Y') . ' ' . date('l');
    echo '<br>';

    echo date('h:i:s') . ' ';
    echo date('a');
    echo '<br>';

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo $timestamp;
    echo '<br>';
    echo date('d/m/Y h:i:s a', $timestamp);
    echo '<br>';

    $timestamp_two = strtotime('7:00pm March 22 2016');
    echo $timestamp_two;
    echo '<br>';
    echo date('d/m/Y h:i:s a', $timestamp_two);
    echo '<br>';

    $timestamp_three = strtotime('tomorrow');
    echo $timestamp_three;
    echo '<br>';
    echo date('d/m/Y h:i:s a', $timestamp_three);
    echo '<br>';

    $timestamp_four = strtotime('next Sunday');
    echo $timestamp_four;
    echo '<br>';
    echo date('d/m/Y h:i:s a', $timestamp_four);
    echo '<br>';

    $timestamp_five = strtotime('+2 months');
    echo $timestamp_five;
    echo '<br>';
    echo date('d/m/Y h:i:s a', $timestamp_five);
    echo '<br>';
?>