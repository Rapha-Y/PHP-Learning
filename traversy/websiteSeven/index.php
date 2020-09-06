<?php
    $path = '/dirOne/myFile.php';
    $file = 'fileOne.txt';
    $folder = '/test';

    echo basename($path) . '<br>';
    echo basename($path, '.php') . '<br>';
    echo dirname($path) . '<br>';
    
    echo file_exists($file) . '<br>';
    echo file_exists($folder) . '<br>';
    echo is_file($file) . '<br>';
    echo is_file($folder) . '<br>';

    echo realpath($file) . '<br>';
    echo is_writable($file) . '<br>';
    echo is_readable($file) . '<br>';
    echo filesize($file) . '<br>'; //size in bytes

    //mkdir('testing');
    //rmdir('testing'); //only if empty

    //copy('fileOne.txt', 'fileTwo.txt');
    //rename('fileTwo.txt', 'fileThree.txt');
    //unlink('fileThree.txt');

    echo file_get_contents($file) . '<br>';
    //file_put_contents($file, 'Goodbye World');

    /*
    $current = file_get_contents($file);
    $current .= ', Goodbye World';
    file_put_contents($file, $current);
    */

    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data . '<br>';
    fclose($handle);

    $handle = fopen('fileTwo.txt', 'w');
    $txt = "Emily Yuki\n";
    fwrite($handle, $txt);
    $txt = "Anni Zeppeli\n";
    fwrite($handle, $txt);
    fclose($handle);
?>