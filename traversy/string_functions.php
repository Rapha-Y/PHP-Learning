<?php
    $output = substr('Hewwo wowwd', 3, 2);
    echo 'o' . $output;
    echo '<br>';

    $nice = strlen('nicenicenicenicenicenicenicenicenicenicenicenicenicenicenicenicenicen');
    echo $nice;
    echo '<br>';

    $ken = strpos('She\'s an absolute terror for absolute territory', 'terr');
    echo $ken;
    echo '<br>';

    $ashcorp = strrpos('She\'s an absolute terror for absolute territory', 'terr');
    echo $ashcorp;
    echo '<br>';

    $text = 'phrases would harder to read in the abscence of spaces      but excessive spacing could be bad';
    echo trim($text);
    echo '<br>';

    $whisper = strtoupper('i\'m not shouting');
    echo $whisper;
    echo '<br>';

    $shout = strtolower('I AM SHOUTING');
    echo $shout;
    echo '<br>';

    $weirdText = ucwords('not all words need be capitalized');
    echo $weirdText;
    echo '<br>';

    $greeting = 'Hello world';
    $farewell = str_replace('Hello', 'Goodbye', $greeting);
    echo $farewell;
    echo '<br>';

    $luckyNumber = '4';
    echo is_string($luckyNumber);
    echo '<br>';

    $diverseArray = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
    foreach ($diverseArray as $value) {
        if (is_string($value)) {
            echo "{$value} is a string<br>";
        }
    }

    $lorem = 
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Pariatur, molestiae! Voluptatibus sunt obcaecati dicta, dolorum itaque dignissimos, 
    ipsum explicabo minus laborum, quas rem. 
    Minima praesentium incidunt odio vero doloribus sequi.';
    $zip = gzcompress($lorem);
    echo $zip;
    echo '<br>';

    $ipsum = gzuncompress($zip);
    echo $ipsum;
?>