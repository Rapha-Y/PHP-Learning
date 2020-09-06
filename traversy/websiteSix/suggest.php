<?php
    $champions[] = "Anivia";
    $champions[] = "Ashe";
    $champions[] = "Aurelion Sol";
    $champions[] = "Braum";
    $champions[] = "Darius";
    $champions[] = "Diana";
    $champions[] = "Draven";
    $champions[] = "Elise";
    $champions[] = "Ezreal";
    $champions[] = "Fiora";
    $champions[] = "Fizz";
    $champions[] = "Gangplank";
    $champions[] = "Garen";
    $champions[] = "Hecarim";
    $champions[] = "Heimerdinger";
    $champions[] = "Jinx";
    $champions[] = "Kalista";
    $champions[] = "Karma";
    $champions[] = "Katarina";
    $champions[] = "Lee Sin";
    $champions[] = "Leona";
    $champions[] = "Lucian";
    $champions[] = "Lulu";
    $champions[] = "Lux";
    $champions[] = "Maokai";
    $champions[] = "Miss Fortune";
    $champions[] = "Nautilus";
    $champions[] = "Nocturne";
    $champions[] = "Quinn";
    $champions[] = "Sejuani";
    $champions[] = "Shen";
    $champions[] = "Swain";
    $champions[] = "Taric";
    $champions[] = "Teemo";
    $champions[] = "Thresh";
    $champions[] = "Trundle";
    $champions[] = "Tryndamere";
    $champions[] = "Twisted Fate";
    $champions[] = "Vi";
    $champions[] = "Vladimir";
    $champions[] = "Yasuo";
    $champions[] = "Zed";

    $q = $_REQUEST['q'];
    $suggestion = "";

    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($champions as $champion) {
            if (stristr($q, substr($champion, 0, $len))) {
                if ($suggestion === "") {
                    $suggestion = $champion;
                } else {
                    $suggestion .= ", $champion";
                }
            }
        }
    }

    echo $suggestion === "" ? "No suggestion" : $suggestion;
?>