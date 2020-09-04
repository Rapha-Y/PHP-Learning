<?php
    /*
    if (filter_has_var(INPUT_POST, 'data')) {
        echo 'Data found';
    } else {
        echo 'Data not found';
    }
    */

    /*
    if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . '<br>';

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    }
    */

    /*
    $var = 23;
    if (filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var . ' is a number';
    } else {
        echo $var . ' is not a number';
    }
    */

    /*
    $number = '384qu21eqdjf32';
    var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
    */

    /*
    $alert = '<script>alert(1)</script>';
    echo filter_var($alert, FILTER_SANITIZE_SPECIAL_CHARS);
    */

    /*
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "dataTwo" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));
    */

    $arr = array (
        "name" => "emily yuki",
        "age" => "23",
        "email" => "anni.709@gmail.com"
    );

    $arrTwo = array (
        "name" => "nowi",
        "age" => "1000",
        "email" => "nowiAtAwakeningDotCom"
    );

    $filters = array (
        "name" => array (
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array (
            "filter" => FILTER_VALIDATE_INT,
            "options" => array (
                "min_range" => 0,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));
    print_r(filter_var_array($arrTwo, $filters));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="dataTwo">
    <button type="submit">Submit</button>
</form>