<?php
    class Person {
        private $name;
        private $email;
        public static $ccMax = 300;
        private static $ccMin = 0;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__ . ' created<br>';
        }

        public function __destruct() {
            echo __CLASS__ . ' destroyed<br>';
        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public static function getCcMin() {
            return self::$ccMin;
        }
    }

    echo Person::getCcMin() . '<br>';
    echo Person::$ccMax . '<br>';

    $inspector = new Person('Tsunemori Akane', 'tsune.akane@sibyl.com');

    //If properties are public, these could be used
    /*
    $inspector->name = 'Tsunemori Akane';
    echo $inspector->name;
    */

    echo $inspector->getName() . '<br>' . $inspector->getEmail() . '<br>';

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email);
            $this->balance = $balance;
            echo __CLASS__ . ' created<br>';
        }

        public function __destruct() {
            echo __CLASS__ . ' destroyed<br>';
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance;
        }
    }

    $enforcer = new Customer('Kagari Shuusei', 'kagari.shuu@sibyl.com', '15000');
    echo $enforcer->getName() . '<br>' . $enforcer->getEmail() . '<br>' . $enforcer->getBalance() . '<br>';
?>