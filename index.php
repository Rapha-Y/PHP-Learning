<?php declare(strict_types=1); ?>

<!DOCTYPE html>
<html>
<body>

<?php
    define("ZERO", 0);

    class Planet {
        public function __construct(string $name = "Earth") {
            $this->name = $name;
        }
    }

    $world = new Planet("Venus");
    $worldling = new Planet();

    $greetings = array("Hi", "Hello", "Nice to meet you,");
    $arraySize = sizeof($greetings)-1;
    $chosenGreeting = $greetings[rand(ZERO, $arraySize)];
    echo $chosenGreeting . ' ' . $world->name . ' and ' . $worldling->name;

    echo "<br>and good day to you:<p>";
    $otherWorlds = array("Mercury", "Mars", "Jupiter", "Saturn", "Neptune", "Uranus");
    sort($otherWorlds);

    foreach($otherWorlds as $otherNames) {
        echo "<br>";
        echo $otherNames;
    }
?>

<body>
<html>