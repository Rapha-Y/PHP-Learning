<?php
    function simpleFunction() {
        echo 'Hello warudo';
    }

    simpleFunction();
    echo '<br>';

    function greetSomething($name = 'nothingness') {
        echo 'Hello ' . $name;
    }

    greetSomething('user');
    echo '<br>';

    greetSomething();
    echo '<br>';

    function subNumbers($num1, $num2) {
        return $num1 - $num2;
    }

    echo subNumbers(4, 2);
    echo '<br>';

    $myNum = 709;
    function subNine(&$num) {
        $num -= 9;
    }

    subNine($myNum);
    echo $myNum;
    echo '<br>';
?>