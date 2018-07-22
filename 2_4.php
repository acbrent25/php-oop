<?php

    class User {
        public $name;
        public $age;

        // Runs when a object is created
        public function __construct($name, $age){
            echo 'Class ' .  __CLASS__ . ' instantiated<br>';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello(){
            return $this->name . ' Says Hello';
        }

        // Destructor called when no other references to a certian object
        // Used for cleanup, clsoing connection, etc.
        public function __destruct(){
            echo 'destructor ran...';
        }
    }

    $user1 = new User('Brad', 36);
    echo $user1->name . ' is ' . $user1->age . ' years old';
    echo '<br>';
    echo $user1->sayHello();
    
    echo '<br>';
    $user2 = new User('Adam', 39);
    echo $user2->name . ' is ' . $user2->age . ' years old';
    echo '<br>';
    echo $user2->sayHello();
