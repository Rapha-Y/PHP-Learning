<?php
    trait Likeable {
        public function message() {
            echo "People like me.";
        }
    }

    class Game {
        use Likeable;

        private $title;
        private $genre;

        function __construct($title, $genre) {
            $this->title = $title;
            $this->genre = $genre;
        }

        function __destruct() {
            echo $this->title . " has been destroyed.<br>";
        }

        function set_title($title) {
            $this->title = $title;
        }
        function set_genre($genre) {
            $this->genre = $genre;
        }

        function get_title() {
            return $this->title;
        }
        function get_genre() {
            return $this->genre;
        }
    }

    final class Moba extends Game {
        function warning() {
            echo "Thou must steer away, for my playerbase is toxic!";
        }
    }

    abstract class Coffee {
        use Likeable;
        
        function __construct($type) {
            $this->type = $type;
        }

        function __destruct() {
            echo "A cup of coffee has been ingested.<br>";
        }

        public function get_type() {
            return $this->type;
        }

        abstract public function drink_coffee();
    }

    class Strong extends Coffee {
        public function drink_coffee() {
            return "Wow!! This is horrible!";
        }
    }

    class Milky extends Coffee {
        public function drink_coffee() {
            return "Wow!! This is nauseating!";
        }
    }

    class Iced extends Coffee {
        public function drink_coffee() {
            return "Ok, this might be tolerable.";
        }
    }

    class Comment {
        public static function below_warning() {
            echo "There are some judgemental comments below...";
        }
    }

    class Death {
        public static $value = 4;
    }

    $fire_emblem = new Game("Fire Emblem", "Dating Simulator");
    $fire_emblem->set_genre("Strategy");

    $league_of_legends = new Moba("League of Legends", "Action");

    $liquid_insecurity = new Strong("Bitter");
    $liquid_water = new Milky("Suave");
    $liquid_happiness = new Iced("Sweet");
?>

<!DOCTYPE html>

<html lang="en">
    <head>
    
    </head>
    <body>
        <?php
            echo $fire_emblem->get_title();
            echo "<br>";
            echo $fire_emblem->get_genre();
            echo "<br>";
            echo $fire_emblem->message();
            echo "<p>";
            
            echo $league_of_legends->get_title();
            echo "<br>";
            echo $league_of_legends->get_genre();
            echo "<br>";
            echo $league_of_legends->warning();
            echo "<p>";

            Comment::below_warning();
            echo "<p>";

            echo $liquid_insecurity->get_type();
            echo "<br>";
            echo $liquid_insecurity->drink_coffee();
            echo "<br>";
            echo $liquid_insecurity->message();
            echo "<p>";

            echo $liquid_water->get_type();
            echo "<br>";
            echo $liquid_water->drink_coffee();
            echo "<br>";
            echo $liquid_water->message();
            echo "<p>";

            echo $liquid_happiness->get_type();
            echo "<br>";
            echo $liquid_happiness->drink_coffee();
            echo "<br>";
            echo $liquid_happiness->message();
            echo "<p>";

            echo Death::$value;
            echo "<p>";
        ?>
    </body>
</html>